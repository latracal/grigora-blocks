"use strict"

import { registerPlugin } from '@wordpress/plugins';
import MetaSettings from './settings';

const { __ } = wp.i18n;

registerPlugin( 'grigora-settings', { render: MetaSettings } );
