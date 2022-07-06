"use strict"

import { registerPlugin } from '@wordpress/plugins';
import MetaSettings from './settings';

const { __ } = wp.i18n;

registerPlugin( 'grigora-settings', { render: MetaSettings } );

// import { registerPlugin } from '@wordpress/plugins';
// import { useGlobalStylesOutput } from './global-styles';
// // import * as AR from '@wordpress/edit-site';
// import {GlobalStylesContext, useGlobalStyles} from '@wordpress/components';

// const PluginDocumentSettingPanelDemo = () => {
//     console.log(GlobalStylesContext);
//     console.log(useGlobalStyles);

//     const [ styles, settings ] = useGlobalStylesOutput();
// 	// console.log(AR);
// 	// console.log(styles);
// 	// console.log(settings);

//     return null;
// }

// registerPlugin( 'plugin-document-setting-panel-demo', {
//     render: PluginDocumentSettingPanelDemo
// } );