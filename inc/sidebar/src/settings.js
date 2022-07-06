import { useState } from 'react';
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
import { ScreenLayout } from './screen-layout';


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
                        aria-label={ __( 'Webfonts' ) }
                    >
                        { __( 'Webfonts' ) }
                    </NavigationButtonAsItem>
                    <NavigationButtonAsItem
                        icon={ layout }
                        path={ '/layout' }
                        aria-label={ __( 'Layout' ) }
                    >
                        { __( 'Layout' ) }
                    </NavigationButtonAsItem>
            </ItemGroup>
			</CardBody>
		</Card>
	);
}

const MetaSettings = props => {

    const icon = parse( svgIcons['grigora-icon-bw'] );

    const { style } = props;
    const { setStyle } = props;
    console.log(style);

    // setStyle([], style);

    const [ webfonts, setWebfonts ] = useState( [] );

    return (
        <>
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
                    <ScreenWebfonts webfonts={webfonts} setWebfonts={setWebfonts} style={style} setStyle={setStyle} />
                </NavigatorScreen>
            
                <NavigatorScreen path="/layout">
                    <ScreenLayout />
                </NavigatorScreen>
            </NavigatorProvider>
            </PluginSidebar>
        </>
    );
}
 
 export default compose(
     withSelect( ( select ) => {
         const expFeatures = select( 'core/block-editor' ).getSettings();
         console.log(expFeatures);
         return {
            style: { ...expFeatures },
         };
     } ),
     withDispatch( ( dispatch ) => ( {
        setStyle: ( newFonts, oldStyle ) => {
            // oldStyle["typography"]["fontFamilies"]["theme"] = [
			// 	{
			// 		"name": "System2",
			// 		"slug": "system",
			// 		"fontFamily": "-apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,Oxygen-Sans,Ubuntu,Cantarell,\"Helvetica Neue\",sans-serif"
			// 	}
			// ];
            // dispatch( 'core/block-editor' ).updateSettings({"__experimentalFeatures": oldStyle});

        }
     } ) ),
 )( MetaSettings );