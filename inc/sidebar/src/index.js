"use strict"

// import { registerPlugin } from '@wordpress/plugins';
// import MetaSettings from './settings';

// const { __ } = wp.i18n;

// registerPlugin( 'grigora-settings', { render: MetaSettings } );

import { registerPlugin } from '@wordpress/plugins';
import { PluginDocumentSettingPanel } from '@wordpress/edit-post';
import { useSelect } from '@wordpress/data';
import { useSetting } from '@wordpress/block-editor';
// import { useGlobalStylesOutput } from './global-styles';
import {
	GlobalStylesContext,
	getMergedGlobalStyles,
	// useMobileGlobalStylesColors,
	// alignmentHelpers,
	useGlobalStyles
} from '@wordpress/components';

const PluginDocumentSettingPanelDemo = () => {
    const globalStyle = getMergedGlobalStyles;
	const customProperty = useSetting('layout');
	console.log(customProperty);
    // const [ styles, settings ] = useGlobalStylesOutput();
    console.log(globalStyle);

    return null;
}

registerPlugin( 'plugin-document-setting-panel-demo', {
    render: PluginDocumentSettingPanelDemo,
    // icon: 'palmtree',
} );