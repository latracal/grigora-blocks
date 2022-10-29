import Select from 'react-select'

import { __ } from '@wordpress/i18n';
import { useEffect, useState } from '@wordpress/element';
import {
    Button,
    SelectControl,
    Spinner,
    __experimentalHStack as HStack,
	__experimentalSpacer as Spacer,
    __experimentalView as View,
    __experimentalHeading as Heading,
    Notice,
} from '@wordpress/components';

import { plus, trash } from '@wordpress/icons';
import { ScreenHeader } from './screen-header';
import G_FONTS from './google-fonts.json';
import apiFetch from '@wordpress/api-fetch';



function ScreenWebfonts({ webfonts, setWebfonts, fontTargets, updateFonts, webfontsSaved, setWebfontsSaved }){

    const [ fontSelector, setFontSelector ] = useState(false);
    const [ fontSelected, setFontSelected ] = useState("");
    const [ variantSelected, setVariantSelected ] = useState([]);
    const [ targetSelected, setTargetSelected ] = useState("body");

    function toggleSelector () {
        setFontSelector(!fontSelector);
    }

    function addFont () {
        setWebfonts([...webfonts, {font: fontSelected, target: targetSelected, variants: variantSelected.map(a => a.value)}]);
        setFontSelector(false);
        setFontSelected("");
    }

    return(
        <>
            <ScreenHeader 
                title={__( 'Typography', "grigora-blocks") }
                description={__( 'Add global fonts to your site.', "grigora-blocks")}
            />
            <ScreenActiveWebfonts webfonts={webfonts} setWebfonts={setWebfonts} fontTargets={fontTargets} />
            { fontSelector && (
                <>
                <View>
                    <Spacer marginBottom={ 0 } paddingX={ 4 } paddingY={ 3 }>
                        <SelectControl
                        onChange={ targetSelected => setTargetSelected(targetSelected) }
                        value={ targetSelected }
                        options={ fontTargets }
                        label={__( 'Target', 'grigora-blocks' )}
                        />
                        <SelectControl
                        onChange={ fontSelected => {
                            setFontSelected(fontSelected);
                            setVariantSelected([]);
                        } }
                        value={ fontSelected }
                        options={ [
                            {
                                label: 'Default',
                                value: '',
                            },
                        ].concat(
                            Object.keys(G_FONTS).map( function ( item ) {
                                return {
                                    label: item,
                                    value: item,
                                };
                            } )
                        ) }
                        label={__( 'Font', 'grigora-blocks' )}
                        />
                        { G_FONTS[fontSelected]?.variants && (
                            <>
                            <p>{__( 'Variants', 'grigora-blocks' )}</p>
                            <p class="fonts-variant-notice">{__( 'Select variants you want to import. By default, only the regular 400 variant is imported. Importing bold variants might be a good idea for bolder headings.', 'grigora-blocks' )}</p>
                            <Select
                                isMulti
                                name="colors"
                                options={G_FONTS[fontSelected].variants.map(function ( item ) {
                                    return {
                                        label: item,
                                        value: item,
                                    };
                                } )}
                                className="basic-multi-select"
                                classNamePrefix="select"
                                placeholder={__( 'Select Variants...', 'grigora-blocks' )}
                                value={variantSelected}
                                onChange={(values)=>{setVariantSelected(values);console.log(values)}}
                            />
                            <br></br>
                        </>
                        ) }
                        <HStack spacing={ 2 }>
                            <Button variant="secondary" onClick={toggleSelector}>Cancel</Button>
                            { fontSelected && webfonts.find(o => o.target === targetSelected) && (
                                <Button variant="primary" disabled>{__( 'Already Used', "grigora-blocks")}</Button>
                            ) }
                            { fontSelected && !webfonts.find(o => o.target === targetSelected) && (
                                <Button variant="primary" onClick={addFont}>{__( 'Add', "grigora-blocks")}</Button>
                            ) }
                        </HStack>
                    </Spacer>
                </View>
                </>
            ) }
            { !fontSelector && (
                <div class="grigora-settings-webfonts-new">
                    <Button variant="primary" icon={ plus }
                        className="grigora-settings-webfonts-new-btn"
                        onClick={toggleSelector}
                    >
                        {__( 'Add Font', 'grigora-blocks' )}
                    </Button>
                </div>
            )}
            <br></br>
                <View>
                    <Spacer marginBottom={ 0 } paddingX={ 4 } paddingY={ 3 }>
                    <Button variant="secondary"
                        onClick={updateFonts}
                    >
                        {__( 'Save Changes', 'grigora-blocks' )}
                    </Button>
                    </Spacer>
                </View>
                { webfontsSaved && (
                    <Notice status={ 'success' } isDismissible={ true } onDismiss={()=>{setWebfontsSaved(false)}}>
                        <p>{__( 'Saved', 'grigora-blocks' )}</p>
                    </Notice>
                ) }
        </>
    );
}

function SingleWebfont({webfonts, setWebfonts, index, fontTargets}){

    function deleteFont(){
		const fonts = [ ...webfonts ]
		fonts.splice( index, 1 )
		setWebfonts( fonts )
    }

    function getTargetString(target){
        var results = fontTargets.find(o => o.value === target);
        return  results.label
    }

    const variants = (webfonts[index].variants && webfonts[index].variants.length > 0) ? webfonts[index].variants.join(", ") : "regular";

    return(
        <>
            <HStack spacing={ 2 }>
                <Spacer>
                    <Heading level={ 4 }>{ getTargetString(webfonts[index].target) }</Heading>
                    <p>{ webfonts[index].font + " @ " + variants }</p>
                </Spacer>
                <Button isSmall icon={ trash } onClick={deleteFont} />
            </HStack>
            <br></br>
        </>
    )
}

function ScreenActiveWebfonts({ webfonts, setWebfonts, fontTargets }){
    if(!Array.isArray(webfonts)){
        setWebfonts([]);
    }

    return(
        <View>
            <Spacer marginBottom={ 0 } paddingX={ 4 } paddingY={ 3 }>
            {Array.isArray(webfonts) && (
                <>
                {webfonts.map(function(webfont, i){
                    return <SingleWebfont webfonts={webfonts} index={i} setWebfonts={setWebfonts} fontTargets={fontTargets} />
                })}
                </>
            )}
            </Spacer>
        </View>
    )
}



export {ScreenWebfonts};