"use strict";(function(a,t){typeof exports=="object"?module.exports=t():a.MonacoBootstrap=t()})(this,function(){const a=typeof require=="function"?require("module"):void 0,t=typeof require=="function"?require("path"):void 0,c=typeof require=="function"?require("fs"):void 0;Error.stackTraceLimit=100,typeof process!="undefined"&&process.on("SIGPIPE",()=>{console.error(new Error("Unexpected SIGPIPE"))});function _(e,o){if(!t||!a||typeof process=="undefined"){console.warn("enableASARSupport() is only available in node.js environments");return}let n=e?t.join(e,"node_modules"):void 0;n?process.platform==="win32"&&(n=__dirname.substr(0,1)+n.substr(1)):n=t.join(__dirname,"../node_modules");const r=`${n}.asar`,h=a._resolveLookupPaths;a._resolveLookupPaths=function(l,u){const s=h(l,u);if(Array.isArray(s)){let i=!1;for(let f=0,A=s.length;f<A;f++)if(s[f]===n){i=!0,s.splice(f,0,r);break}o&&!i&&s.push(r)}return s}}function S(e,o){let n=e.replace(/\\/g,"/");n.length>0&&n.charAt(0)!=="/"&&(n=`/${n}`);let r;return o.isWindows&&n.startsWith("//")?r=encodeURI(`${o.scheme||"file"}:${n}`):r=encodeURI(`${o.scheme||"file"}://${o.fallbackAuthority||""}${n}`),r.replace(/#/g,"%23")}function N(){const e=b();let o={availableLanguages:{}};if(e&&e.env.VSCODE_NLS_CONFIG)try{o=JSON.parse(e.env.VSCODE_NLS_CONFIG)}catch(n){}if(o._resolvedLanguagePackCoreLocation){const n=Object.create(null);o.loadBundle=function(r,h,l){const u=n[r];if(u){l(void 0,u);return}g(o._resolvedLanguagePackCoreLocation,`${r.replace(/\//g,"!")}.nls.json`).then(function(s){const i=JSON.parse(s);n[r]=i,l(void 0,i)}).catch(s=>{try{o._corruptedFile&&v(o._corruptedFile,"corrupted").catch(function(i){console.error(i)})}finally{l(s,void 0)}})}}return o}function d(){return(typeof self=="object"?self:typeof global=="object"?global:{}).vscode}function b(){const e=d();if(e)return e.process;if(typeof process!="undefined")return process}function p(){const e=d();if(e)return e.ipcRenderer}async function g(...e){const o=p();if(o)return o.invoke("vscode:readNlsFile",...e);if(c&&t)return(await c.promises.readFile(t.join(...e))).toString();throw new Error("Unsupported operation (read NLS files)")}function v(e,o){const n=p();if(n)return n.invoke("vscode:writeNlsFile",e,o);if(c)return c.promises.writeFile(e,o);throw new Error("Unsupported operation (write NLS files)")}function y(){if(typeof process=="undefined"){console.warn("avoidMonkeyPatchFromAppInsights() is only available in node.js environments");return}process.env.APPLICATION_INSIGHTS_NO_DIAGNOSTIC_CHANNEL=!0,global.diagnosticsSource={}}return{enableASARSupport:_,avoidMonkeyPatchFromAppInsights:y,setupNLS:N,fileUriFromPath:S}});

//# sourceMappingURL=https://ticino.blob.core.windows.net/sourcemaps/2aeda6b18e13c4f4f9edf6667158a6b8d408874b/core/bootstrap.js.map
