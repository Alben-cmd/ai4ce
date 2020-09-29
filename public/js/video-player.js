 (async function( d ) {
   'use strict';

   var str = d.querySelectorAll( '.starter' ), 
       pyr = d.querySelectorAll( '.player' ),
       c;
for ( c = 0; c < str.length; c ++ ) {
   str[c].classList.remove( 'hide' );

   str[c].addEventListener( 'click', startVideo(c), false );

   pyr[ c ].addEventListener( 'ended', endVideo(c), false );
 }

async function startVideo(c) {
str[c].onclick=function(){
                  pyr[ c ].play();
                  str[ c ].classList.add( 'hide' );
  }
 }
async function endVideo(c) {
pyr[c].onended=function(){
                  pyr[ c ].load();
                  str[ c ].classList.remove( 'hide' );
  }
 }

 }( document ));