import { __ } from '@wordpress/i18n';
import { useState } from 'react';
import {
	ColorIndicator,
    Button,
    SelectControl,
    __experimentalHStack as HStack,
	__experimentalVStack as VStack,
	__experimentalSpacer as Spacer,
    __experimentalView as View,
    __experimentalHeading as Heading,
    Icon
} from '@wordpress/components';

import { plus, trash } from '@wordpress/icons';
import { ScreenHeader } from './screen-header';
import googleFonts from './google-fonts.json';
import { useSetting } from './global-styles';

googleFonts = googleFonts["googleFonts"];

function SingleWebfont({webfonts, setWebfonts, index}){

    function deleteFont(){
		const fonts = [ ...webfonts ]
		fonts.splice( index, 1 )

		setWebfonts( fonts );
    }

    return(
        <>
            <HStack spacing={ 2 }>
                <Spacer>
                    <Heading level={ 5 }>{ googleFonts[webfonts[index]] }</Heading>
                </Spacer>
                <Button isSmall icon={ trash } onClick={deleteFont} />
            </HStack>
        </>
    )
}

function ScreenActiveWebfonts({ webfonts, setWebfonts }){
    if(!Array.isArray(webfonts)){
        setWebfonts([]);
    }

    return(
        <View>
            <Spacer marginBottom={ 0 } paddingX={ 4 } paddingY={ 3 }>
            {Array.isArray(webfonts) && (
                <>
                {webfonts.map(function(webfont, i){
                    return <SingleWebfont webfonts={webfonts} index={i} setWebfonts={setWebfonts} />
                })}
                </>
            )}
            </Spacer>
        </View>
    )
}

function ScreenWebfonts({ webfonts, setWebfonts }){

    const [ fontSelector, setFontSelector ] = useState(false);
    const [ fontSelected, setFontSelected ] = useState("");

    const [fontFamilies, setfontFamilies] = useSetting(
		'typography.fontFamilies'
	);

	// const [ customColors, setCustomColors ] = useSetting(
	// 	'color.palette.custom'
	// );

	// const [ defaultPaletteEnabled ] = useSetting(
	// 	'color.defaultPalette'
	// );

    console.log(fontFamilies);
    setfontFamilies([
        {
            "name": "System",
            "slug": "system",
            "fontFamily": "-apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,Oxygen-Sans,Ubuntu,Cantarell,\"Helvetica Neue\",sans-serif"
        }]);

    function toggleSelector () {
        setFontSelector(!fontSelector);
    }

    function addFont () {
        setWebfonts([...webfonts, fontSelected]);
        setFontSelector(false);
        setFontSelected("");
    }

    return(
        <>
            <ScreenHeader 
                title={__( 'Webfonts', "grigora-adons") }
                description={__( 'Add google fonts to your Wordpress site.', "grigora-adons")}
            />
            <ScreenActiveWebfonts webfonts={webfonts} setWebfonts={setWebfonts} />
            { fontSelector && (
                <>
                <View>
                    <Spacer marginBottom={ 0 } paddingX={ 4 } paddingY={ 3 }>
                        <SelectControl
                        onChange={ newFontSelected => setFontSelected(newFontSelected) }
                        value={ fontSelected }
                        options={ Object.keys(googleFonts).map(function(key) {
                            return {
                                label: googleFonts[key],
                                value: key
                            };
                          } ) }
                        />
                        <HStack spacing={ 2 }>
                            <Button variant="secondary" onClick={toggleSelector}>Cancel</Button>
                            <Button variant="primary" onClick={addFont}>Add</Button>
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
                        {__( 'Add Google Font', 'grigora-blocks' )}
                    </Button>
                </div>
            )}

        </>
    );
}



export {ScreenWebfonts};