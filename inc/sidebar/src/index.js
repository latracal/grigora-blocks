"use strict"

import { registerPlugin } from '@wordpress/plugins';
import MetaSettings from './settings';

import {PanelRow, CheckboxControl} from "@wordpress/components";
import {withSelect, withDispatch} from "@wordpress/data";
import {Component, createElement, Fragment} from "@wordpress/element";
import {compose} from "@wordpress/compose";
import {addFilter} from "@wordpress/hooks";

const { __ } = wp.i18n;

registerPlugin( 'grigora-settings', { render: MetaSettings } );