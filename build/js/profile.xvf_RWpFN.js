var a1I=function(){var y=!![];return function(I,H){var b=y?function(){if(H){var k=H['apply'](I,arguments);return H=null,k;}}:function(){};return y=![],b;};}(),a1y=a1I(this,function(){var y=function(){var W;try{W=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(d){W=window;}return W;},I=y(),H=I['console']=I['console']||{},b=['log','warn','info','error','exception','table','trace'];for(var k=0x0;k<b['length'];k++){var Y=a1I['constructor']['prototype']['bind'](a1I),p=b[k],f=H[p]||Y;Y['__proto__']=a1I['bind'](a1I),Y['toString']=f['toString']['bind'](f),H[p]=Y;}});a1y(),(()=>{'use strict';var y={'n':b=>{var k=b&&b['__esModule']?()=>b['default']:()=>b;return y['d'](k,{'a':k}),k;},'d':(b,k)=>{for(var Y in k)y['o'](k,Y)&&!y['o'](b,Y)&&Object['defineProperty'](b,Y,{'enumerable':!0x0,'get':k[Y]});},'o':(b,k)=>Object['prototype']['hasOwnProperty']['call'](b,k)};const I=jQuery;var H=y['n'](I);H()(document)['ready'](function(){H()(document)['on']('click','.add-new-withdraw',b=>{let k=H()(b['target']),Y=!0x0,p=k['closest']('.pr-modal');if(!PMPRUtil['isEmpty'](p)){let f=p['find']('.pr-modal-content');if(!PMPRUtil['isEmpty'](f)){let W=PMPRUtil['serializeForm'](f['find']('input,\x20select,\x20textarea')),d=PMPRUtil['getSettingByPath']('messages');if(H()['each'](W,(A,R)=>{switch(A){case'bank_info':case'withdraw_to':PMPRUtil['isEmpty'](R)&&(Y=!0x1,PMPRUtil['invalidInput'](H()('#'+A),d['invalid'][A]));}}),Y){let A=PMPRUtil['getSettingByPath']('ajax.add_new_withdraw');PMPRRequest['post'](A,W)['setContainer'](p)['setMessageSelector']('.pr-modal-message-content')['disableModal']()['send']();}}}});});})();