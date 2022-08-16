import { __ } from '@wordpress/i18n';
import { Component } from '@wordpress/element';
import WebFont from 'webfontloader';
import PropTypes from 'prop-types';

let statuses = {
	inactive: 'inactive',
	active: 'active',
	loading: 'loading',
};

const noop = () => {};

class Googlefontloader extends Component {
	componentWillMount() {
		const { config, onStatus } = this.props;
		if ( config?.google?.families[ 0 ] ) {
			WebFont.load( {
				...config,
				loading: () => onStatus( statuses.loading ),
				active: () => onStatus( statuses.active ),
				inactive: () => onStatus( statuses.inactive ),
			} );
		}
	}

	delay(time) {
		return new Promise(resolve => setTimeout(resolve, time));
	}
	
	tryNtimes(wait, n){
		const { onStatus, config } = this.props;
		if( n === 0){
			return
		}
		this.delay(wait).then(() => {
			if(frames['editor-canvas']){
				WebFont.load( {
					...config,
					loading: () => onStatus( statuses.loading ),
					active: () => onStatus( statuses.active ),
					inactive: () => onStatus( statuses.inactive ),
					context: frames[ 'editor-canvas' ],
				} );
			}
			else{
				this.tryNtimes(wait, n-1);
			}
		});
	}

	componentDidUpdate( prevProps, prevState ) {
		const { onStatus, config } = this.props;
		if ( prevProps.config !== config ) {
			if ( config?.google?.families[ 0 ] ) {
				if(grigora_constants.current_screen === "site-editor"){
					if(frames[ 'editor-canvas' ]){
						WebFont.load( {
							...config,
							loading: () => onStatus( statuses.loading ),
							active: () => onStatus( statuses.active ),
							inactive: () => onStatus( statuses.inactive ),
							context: frames[ 'editor-canvas' ],
						} );
					}
					else{
						this.tryNtimes(1000, 5)
					}
				}
				else{
					WebFont.load( {
						...config,
						loading: () => onStatus( statuses.loading ),
						active: () => onStatus( statuses.active ),
						inactive: () => onStatus( statuses.inactive ),
					} );
				}
			}
		}
	}

	render() {
		const { children } = this.props;
		return children || null;
	}
}

Googlefontloader.propTypes = {
	config: PropTypes.object.isRequired,
	children: PropTypes.element.isRequired,
	onStatus: PropTypes.func.isRequired,
	onFontStatus: PropTypes.func.isRequired,
};

Googlefontloader.defaultProps = {
	onStatus: noop,
	onFontStatus: noop,
};

export default Googlefontloader;
