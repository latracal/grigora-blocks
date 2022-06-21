import { useState } from 'react';
import { PluginSidebar, PluginSidebarMoreMenuItem } from '@wordpress/edit-site';
import { compose } from '@wordpress/compose';
import svgIcons from './../../../assets/images/svg/svg.json'
import { withSelect, withDispatch } from '@wordpress/data';
import { SelectControl, PanelBody, Modal,
    Icon,
    __experimentalUnitControl as UnitControl,
    __experimentalNavigatorProvider as NavigatorProvider,
    __experimentalNavigatorScreen as NavigatorScreen,
    __experimentalNavigatorButton as NavigatorButton,
    __experimentalHStack as HStack,
	__experimentalVStack as VStack,
	__experimentalSpacer as Spacer,
	__experimentalHeading as Heading,
	__experimentalView as View,
    __experimentalItemGroup as ItemGroup,
    FlexItem,
	CardBody,
	Card,
	CardDivider,
	CardMedia,
    __experimentalNavigatorBackButton as NavigatorBackButton, } from '@wordpress/components';
import parse from 'html-react-parser';
import { chevronRight, chevronLeft, typography, layout } from '@wordpress/icons';
const { isRTL, __ } = wp.i18n;

import { NavigationButtonAsItem } from './navigation-button';
import { ScreenWebfonts } from './screen-webfonts';
import { ScreenHeader } from './screen-header';


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


    const [ isOpen, setOpen ] = useState( false );

    const openModal = () => setOpen( true );
    const closeModal = () => setOpen( false );

    const icon = parse( svgIcons['grigora-icon-bw'] );

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
                    <ScreenWebfonts webfonts={webfonts} setWebfonts={setWebfonts} />
                </NavigatorScreen>
            
                <NavigatorScreen path="/layout">
                    <ScreenHeader 
                        title={__( 'Layout', "grigora-adons") }
                        description={__( 'Change theme layout constants.', "grigora-adons")}
                    />
                    <UnitControl
                        label={ __( 'Content Size', "grigora-adons" ) }
                        value={ "1px" }
                        onChange={ newValue => console.log(newValue) }
                    />
                    <UnitControl
                        label={ __( 'Wide Size', "grigora-adons" ) }
                        value={ "1px" }
                        onChange={ newValue => console.log(newValue) }
                    />
                    <UnitControl
                        label={ __( 'Spacing', "grigora-adons" ) }
                        value={ "1px" }
                        onChange={ newValue => console.log(newValue) }
                    />
                </NavigatorScreen>
            </NavigatorProvider>
            </PluginSidebar>
        </>
    );
}
 
 export default compose(
     withSelect( ( select ) => {
         const postMeta = select( 'core/editor' ).getEditedPostAttribute( 'meta' );
         const oldPostMeta = select( 'core/editor' ).getCurrentPostAttribute( 'meta' );
         return {
             meta: { ...oldPostMeta, ...postMeta },
             oldMeta: oldPostMeta,
         };
     } ),
     withDispatch( ( dispatch ) => ( {
         setMetaFieldValue: ( value, field ) => dispatch( 'core/editor' ).editPost(
             { meta: { [ field ]: value } }
         ),
     } ) ),
 )( MetaSettings );