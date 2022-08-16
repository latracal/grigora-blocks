import { useEffect, useState } from '@wordpress/element';
import { PluginSidebar, PluginSidebarMoreMenuItem } from '@wordpress/edit-site';
import { compose } from '@wordpress/compose';
import svgIcons from './../../../assets/images/svg/svg.json'
import { withSelect, withDispatch } from '@wordpress/data';
import {
    __experimentalNavigatorProvider as NavigatorProvider,
    __experimentalNavigatorScreen as NavigatorScreen,
	__experimentalSpacer as Spacer,
    __experimentalItemGroup as ItemGroup,
	CardBody,
	Card } from '@wordpress/components';
import parse from 'html-react-parser';
import { typography, layout } from '@wordpress/icons';
const { __ } = wp.i18n;

import { NavigationButtonAsItem } from './navigation-button';
import { ScreenWebfonts } from './screen-webfonts';
import Googlefontloader from './googlefontloader';
import apiFetch from '@wordpress/api-fetch';


function ScreenRoot() {
	return (
		<Card size="small">

			<CardBody>
				<Spacer
					as="p"
					paddingTop={ 2 }
					paddingX="13px"
					marginBottom={ 4 }
				>
					{ __('Change the theme level settings.', 'grigora-blocks') }
				</Spacer>
                <ItemGroup>
                    <NavigationButtonAsItem
                        icon={ typography }
                        path={ '/webfonts' }
                        aria-label={ __( 'Typography' ) }
                    >
                        { __( 'Typography' ) }
                    </NavigationButtonAsItem>

            </ItemGroup>
			</CardBody>
		</Card>
	);
}
function delay(time) {
    return new Promise(resolve => setTimeout(resolve, time));
}

function tryNtimes(css, wait, n){
    if(grigora_constants.current_screen === "site-editor"){
    if( n === 0){
        return
    }
        delay(wait).then(() => {
            if(frames['editor-canvas']){
                frames['editor-canvas'].document.head.appendChild(css);
            }
            else{
                tryNtimes(css, wait, n-1);
            }
        });
    }
}
  

function updateFontCSS(webfonts){
    if(webfonts){
        var css = "";
        webfonts.forEach((x) => {
            if(x.target === "body"){
                css = css.concat(`.editor-styles-wrapper{font-family:${x.font} !important;}`)
            }
            else if(x.target === "h*"){
                css = css.concat(`.editor-styles-wrapper h1, .editor-styles-wrapper h2, .editor-styles-wrapper h3, .editor-styles-wrapper h4, .editor-styles-wrapper h5,.editor-styles-wrapper h6{font-family:${x.font};}`)
            }
            else if(x.target === "h2"){
                css = css.concat(`.editor-styles-wrapper h2{font-family:${x.font};}`)
            }
            else if(x.target === "h3"){
                css = css.concat(`.editor-styles-wrapper h3{font-family:${x.font};}`)
            }
            else if(x.target === "h4"){
                css = css.concat(`.editor-styles-wrapper h4{font-family:${x.font};}`)
            }
            else if(x.target === "h5"){
                css = css.concat(`.editor-styles-wrapper h5{font-family:${x.font};}`)
            }
            else if(x.target === "h6"){
                css = css.concat(`.editor-styles-wrapper h6{font-family:${x.font};}`)
            }
            else if(x.target === "site-title"){
                css = css.concat(`.editor-styles-wrapper .wp-block-site-title{font-family:${x.font};}`)
            }
            else if(x.target === "header"){
                css = css.concat(`.editor-styles-wrapper header{font-family:${x.font};}`)
            }
            else if(x.target === "header-nav"){
                css = css.concat(`.editor-styles-wrapper header nav{font-family:${x.font};}`)
            }
            else if(x.target === "button"){
                css = css.concat(`.editor-styles-wrapper button:not(.menu-toggle), .editor-styles-wrapper html input[type="button"], .editor-styles-wrapper input[type="reset"], .editor-styles-wrapper input[type="submit"], .editor-styles-wrapper .button, .editor-styles-wrapper .wp-block-button .wp-block-button__link{font-family:${x.font};}`)
            }
            else if(x.target === "footer"){
                css = css.concat(`.editor-styles-wrapper footer{font-family:${x.font};}`)
            }
        });

        if(grigora_constants.current_screen === "site-editor"){
            if(frames['editor-canvas']){
                var dynamicsheet = frames['editor-canvas'].document.getElementById("grigora-webfont-css-editor");
                if(dynamicsheet == null){
                    var cssLink = document.createElement("style");
                    cssLink.id = "grigora-webfont-css-editor"; 
                    cssLink.innerHTML = css;
                    frames['editor-canvas'].document.head.appendChild(cssLink);
                }
                else{
                    dynamicsheet.innerHTML = css;
                }
            }
            else{
                var cssLink = document.createElement("style");
                cssLink.id = "grigora-webfont-css-editor"; 
                cssLink.innerHTML = css;
                tryNtimes(cssLink, 1000, 5);
            }
        }
        else{
            var dynamicsheet = document.getElementById("grigora-webfont-css-editor");
            if(dynamicsheet == null){
                var cssLink = document.createElement("style");
                cssLink.id = "grigora-webfont-css-editor"; 
                cssLink.innerHTML = css;
                document.head.appendChild(cssLink);
            }
            else{
                dynamicsheet.innerHTML = css;
            }
        }

    }
}

const MetaSettings = props => {

    const icon = parse( svgIcons['grigora-icon-bw'] );

    const { style } = props;
    
    const [ webfonts, setWebfonts ] = useState( false );

    const [webfontsSaved, setWebfontsSaved] = useState( false );

    useEffect( () => {
		apiFetch( {
            path: '/grigora-blocks/v1/typography',
            method: 'GET',
        } ).then( ( result ) => {
            if(result.settings){
                setWebfonts(result.settings);
            }
        } );
	}, [] );

    function updateFonts(){
        if(webfonts){
            apiFetch( {
                path: '/grigora-blocks/v1/typography',
                method: 'POST',
                data: {webfonts}
            } ).then( ( result ) => {
                console.log(__( 'Updated Font.', "grigora-blocks"));
                setWebfontsSaved(true);
            } );
        }
    }

    useEffect(() => {
        updateFontCSS(webfonts)
      }, [webfonts])


    const fontTargets = [
        {
            label: "Body",
            value: "body"
        },
        {
            label: "Headings",
            value: "h*"
        },
        {
            label: "H1",
            value: "h1"
        },
        {
            label: "H2",
            value: "h2"
        },
        {
            label: "H3",
            value: "h3"
        },
        {
            label: "H4",
            value: "h4"
        },
        {
            label: "H5",
            value: "h5"
        },
        {
            label: "H6",
            value: "h6"
        },
        {
            label: "Site Title",
            value: "site-title"
        },
        {
            label: "Header",
            value: "header"
        },
        {
            label: "Header Navigation",
            value: "header-nav"
        },
        {
            label: "Buttons",
            value: "button"
        },
        {
            label: "Footer",
            value: "footer"
        },
    ];

    return (
        <>
            <Googlefontloader
				config={ {
					google: {
						families: Array.from(webfonts, obj => obj.font),
					},
				} }

			></Googlefontloader>
            
            {/* Meta settings icon */}
            <PluginSidebarMoreMenuItem
                target="theme-meta-panel"
                icon={ icon }
            >
                { __("Grigora Blocks", "grigora-blocks") }
            </PluginSidebarMoreMenuItem>

            {/* Meta seetings popup area */}
                <PluginSidebar
                isPinnable={ true }
                icon={ icon }
                name="theme-meta-panel"
                title={ __("Grigora Blocks Settings", "grigora-blocks") }
            >
                <NavigatorProvider initialPath="/">

                <NavigatorScreen path="/">
                    <ScreenRoot />
                </NavigatorScreen>

                <NavigatorScreen path="/webfonts">
                    <ScreenWebfonts webfonts={webfonts} setWebfonts={setWebfonts} fontTargets={fontTargets} updateFonts={updateFonts} webfontsSaved={webfontsSaved} setWebfontsSaved={setWebfontsSaved} />
                </NavigatorScreen>
            
            </NavigatorProvider>
            </PluginSidebar>
        </>
    );
}
 
 export default compose(
     withSelect( ( select ) => {
     } ),
     withDispatch( ( dispatch ) => ( {
     } ) ),
 )( MetaSettings );