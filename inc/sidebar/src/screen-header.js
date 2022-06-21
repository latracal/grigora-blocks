import { withSelect, withDispatch } from '@wordpress/data';
import {
    __experimentalHStack as HStack,
	__experimentalVStack as VStack,
	__experimentalSpacer as Spacer,
	__experimentalHeading as Heading,
	__experimentalView as View,
    __experimentalNavigatorBackButton as NavigatorBackButton } from '@wordpress/components';

import { chevronRight, chevronLeft, typography, layout } from '@wordpress/icons';
const { isRTL, __ } = wp.i18n;

import { NavigationButtonAsItem } from './navigation-button';

function ScreenHeader( { title, description } ) {
	return (
		<VStack spacing={ 0 }>
			<View>
				<Spacer marginBottom={ 0 } paddingX={ 4 } paddingY={ 3 }>
					<HStack spacing={ 2 }>
						<NavigatorBackButton
							style={
								{ minWidth: 24, padding: 0 }
							}
							icon={ isRTL() ? chevronRight : chevronLeft }
							isSmall
							aria-label={ __( 'Navigate to the previous view', 'grigora-blocks' ) }
						/>
						<Spacer>
							<Heading level={ 5 }>{ title }</Heading>
						</Spacer>
					</HStack>
				</Spacer>
			</View>
            <View>
				<Spacer marginBottom={ 0 } paddingX={ 4 } paddingY={ 3 }>
                    { description && (
                        <p className="grigora-blocks-settings-header__description">
                            { description }
                        </p>
                    ) }
				</Spacer>
			</View>
		</VStack>
	);
}

export {ScreenHeader};