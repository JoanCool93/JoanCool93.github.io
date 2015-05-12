(function(d,g){var a=d.document,e=d.setTimeout||e,f=d.clearTimeout||f,b=d.setInterval||b,c=d.History=d.History||{};if(typeof c.initHtml4!=="undefined"){throw new Error("History.js HTML4 Support has already been loaded...")}c.initHtml4=function(){if(typeof c.initHtml4.initialized!=="undefined"){return false}else{c.initHtml4.initialized=true}c.enabled=true;c.savedHashes=[];c.isLastHash=function(h){var j=c.getHashByIndex(),i;i=h===j;return i};c.saveHash=function(h){if(c.isLastHash(h)){return false}c.savedHashes.push(h);return true};c.getHashByIndex=function(h){var i=null;if(typeof h==="undefined"){i=c.savedHashes[c.savedHashes.length-1]}else{if(h<0){i=c.savedHashes[c.savedHashes.length+h]}else{i=c.savedHashes[h]}}return i};c.discardedHashes={};c.discardedStates={};c.discardState=function(l,h,k){var i=c.getHashByState(l),j;j={discardedState:l,backState:k,forwardState:h};c.discardedStates[i]=j;return true};c.discardHash=function(i,h,k){var j={discardedHash:i,backState:k,forwardState:h};c.discardedHashes[i]=j;return true};c.discardedState=function(h){var j=c.getHashByState(h),i;i=c.discardedStates[j]||false;return i};c.discardedHash=function(i){var h=c.discardedHashes[i]||false;return h};c.recycleState=function(h){var i=c.getHashByState(h);if(c.discardedState(h)){delete c.discardedStates[i]}return true};if(c.emulated.hashChange){c.hashChangeInit=function(){c.checkerFunction=null;var h="",l,i,j,k;if(c.isInternetExplorer()){l="historyjs-iframe";i=a.createElement("iframe");i.setAttribute("id",l);i.style.display="none";a.body.appendChild(i);i.contentWindow.document.open();i.contentWindow.document.close();j="";k=false;c.checkerFunction=function(){if(k){return false}k=true;var n=c.getHash()||"",m=c.unescapeHash(i.contentWindow.document.location.hash)||"";if(n!==h){h=n;if(m!==n){j=m=n;i.contentWindow.document.open();i.contentWindow.document.close();i.contentWindow.document.location.hash=c.escapeHash(n)}c.Adapter.trigger(d,"hashchange")}else{if(m!==j){j=m;c.setHash(m,false)}}k=false;return true}}else{c.checkerFunction=function(){var m=c.getHash();if(m!==h){h=m;c.Adapter.trigger(d,"hashchange")}return true}}c.intervalList.push(b(c.checkerFunction,c.options.hashChangeInterval));return true};c.Adapter.onDomLoad(c.hashChangeInit)}if(c.emulated.pushState){c.onHashChange=function(l){var m=((l&&l.newURL)||a.location.href),k=c.getHashByUrl(m),j=null,h=null,n=null,i;if(c.isLastHash(k)){c.busy(false);return false}c.doubleCheckComplete();c.saveHash(k);if(k&&c.isTraditionalAnchor(k)){c.Adapter.trigger(d,"anchorchange");c.busy(false);return false}j=c.extractState(c.getFullUrl(k||a.location.href,false),true);if(c.isLastSavedState(j)){c.busy(false);return false}h=c.getHashByState(j);i=c.discardedState(j);if(i){if(c.getHashByIndex(-2)===c.getHashByState(i.forwardState)){c.back(false)}else{c.forward(false)}return false}c.pushState(j.data,j.title,j.url,false);return true};c.Adapter.bind(d,"hashchange",c.onHashChange);c.pushState=function(l,p,h,n){if(c.getHashByUrl(h)){throw new Error("History.js does not support states with fragement-identifiers (hashes/anchors).")}if(n!==false&&c.busy()){c.pushQueue({scope:c,callback:c.pushState,args:arguments,queue:n});return false}c.busy(true);var k=c.createStateObject(l,p,h),i=c.getHashByState(k),j=c.getState(false),m=c.getHashByState(j),o=c.getHash();c.storeState(k);c.expectedStateId=k.id;c.recycleState(k);c.setTitle(k);if(i===m){c.busy(false);return false}if(i!==o&&i!==c.getShortUrl(a.location.href)){c.setHash(i,false);return false}c.saveState(k);c.Adapter.trigger(d,"statechange");c.busy(false);return true};c.replaceState=function(l,n,k,h){if(c.getHashByUrl(k)){throw new Error("History.js does not support states with fragement-identifiers (hashes/anchors).")}if(h!==false&&c.busy()){c.pushQueue({scope:c,callback:c.replaceState,args:arguments,queue:h});return false}c.busy(true);var m=c.createStateObject(l,n,k),j=c.getState(false),i=c.getStateByIndex(-2);c.discardState(j,m,i);c.pushState(m.data,m.title,m.url,false);return true}}if(c.emulated.pushState){if(c.getHash()&&!c.emulated.hashChange){c.Adapter.onDomLoad(function(){c.Adapter.trigger(d,"hashchange")})}}};if(typeof c.init!=="undefined"){c.init()}})(window);