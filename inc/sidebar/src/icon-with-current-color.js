/**
 * External dependencies
 */
import classnames from 'classnames';

/**
 * WordPress dependencies
 */
import { Icon } from '@wordpress/components';

export function IconWithCurrentColor( { className, ...props } ) {
    return (
        <Icon
            className={ classnames(
                className,
                'edit-site-global-styles-icon-with-current-color'
            ) }
            { ...props }
        />
    );
}