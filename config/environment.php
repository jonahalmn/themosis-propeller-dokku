<?php

/*----------------------------------------------------*/
// Define environment type
/*----------------------------------------------------*/
return function(){
    if( getenv('ENV') !== 'local' ) {
        return 'production';
    }

    return 'local';
};

