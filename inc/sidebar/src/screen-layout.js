import { __ } from '@wordpress/i18n';
import {
    __experimentalUnitControl as UnitControl,
    __experimentalSpacer as Spacer,
    __experimentalView as View,
} from '@wordpress/components';

import { ScreenHeader } from './screen-header';

function ScreenLayout(){

    return(
        <>
            <ScreenHeader 
                title={__( 'Layout', "grigora-adons") }
                description={__( 'Change theme layout constants.', "grigora-adons")}
            />
            <View>
                <Spacer marginBottom={ 0 } paddingX={ 4 } paddingY={ 3 }>
                <UnitControl
                    label={ __( 'Content Size', "grigora-adons" ) }
                    value={ "1px" }
                    onChange={ newValue => console.log(newValue) }
                />
                <br></br>
                <UnitControl
                    label={ __( 'Wide Size', "grigora-adons" ) }
                    value={ "1px" }
                    onChange={ newValue => console.log(newValue) }
                />
                <br></br>
                <UnitControl
                    label={ __( 'Spacing', "grigora-adons" ) }
                    value={ "1px" }
                    onChange={ newValue => console.log(newValue) }
                />
                </Spacer>
            </View>

        </>
    );
}



export {ScreenLayout};