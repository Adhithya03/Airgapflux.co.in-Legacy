(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[170],{511:(e,t)=>{"use strict";function r(e){let t,r,o,i,a,l,h;return u(),{feed:function(u){r=r?r+u:u,t&&n(r)&&(r=r.slice(s.length)),t=!1;let d=r.length,c=0,p=!1;for(;c<d;){let t;p&&("\n"===r[c]&&++c,p=!1);let s=-1,n=i;for(let e=o;s<0&&e<d;++e)":"===(t=r[e])&&n<0?n=e-c:"\r"===t?(p=!0,s=e-c):"\n"===t&&(s=e-c);if(s<0){o=d-c,i=n;break}o=0,i=-1,function(t,r,s,n){if(0===n){h.length>0&&(e({type:"event",id:a,event:l||void 0,data:h.slice(0,-1)}),h="",a=void 0),l=void 0;return}let o=s<0,i=t.slice(r,r+(o?n:s)),u=0;u=o?n:" "===t[r+s+1]?s+2:s+1;let d=r+u,c=n-u,p=t.slice(d,d+c).toString();if("data"===i)h+=p?"".concat(p,"\n"):"\n";else if("event"===i)l=p;else if("id"!==i||p.includes("\x00")){if("retry"===i){let t=parseInt(p,10);Number.isNaN(t)||e({type:"reconnect-interval",value:t})}}else a=p}(r,c,n,s),c+=s+1}c===d?r="":c>0&&(r=r.slice(c))},reset:u};function u(){t=!0,r="",o=0,i=-1,a=void 0,l=void 0,h=""}}let s=[239,187,191];function n(e){return s.every((t,r)=>e.charCodeAt(r)===t)}t.j=r},542:(e,t,r)=>{"use strict";r.r(t),r.d(t,{default:()=>Q});class s extends Error{constructor({page:e}){super(`The middleware "${e}" accepts an async API directly with the form:
  
  export function middleware(request, event) {
    return NextResponse.redirect('/new-location')
  }
  
  Read more: https://nextjs.org/docs/messages/middleware-new-signature
  `)}}class n extends Error{constructor(){super(`The request.page has been deprecated in favour of \`URLPattern\`.
  Read more: https://nextjs.org/docs/messages/middleware-request-page
  `)}}class o extends Error{constructor(){super(`The request.ua has been removed in favour of \`userAgent\` function.
  Read more: https://nextjs.org/docs/messages/middleware-parse-user-agent
  `)}}function i(e){let t=new Headers;for(let[r,s]of Object.entries(e)){let e=Array.isArray(s)?s:[s];for(let s of e)void 0!==s&&t.append(r,s)}return t}function a(e){var t,r,s,n,o,i=[],a=0;function l(){for(;a<e.length&&/\s/.test(e.charAt(a));)a+=1;return a<e.length}for(;a<e.length;){for(t=a,o=!1;l();)if(","===(r=e.charAt(a))){for(s=a,a+=1,l(),n=a;a<e.length&&"="!==(r=e.charAt(a))&&";"!==r&&","!==r;)a+=1;a<e.length&&"="===e.charAt(a)?(o=!0,a=n,i.push(e.substring(t,s)),t=a):a=s+1}else a+=1;(!o||a>=e.length)&&i.push(e.substring(t,e.length))}return i}function l(e){let t={};if(e)for(let[r,s]of e.entries())t[r]=s,"set-cookie"===r.toLowerCase()&&(t[r]=a(s));return t}function h(e){try{return String(new URL(String(e)))}catch(t){throw Error(`URL is malformed "${String(e)}". Please use only absolute URLs - https://nextjs.org/docs/messages/middleware-relative-urls`,{cause:t})}}let u=Symbol("response"),d=Symbol("passThrough"),c=Symbol("waitUntil");class p{[c]=[];[d]=!1;constructor(e){}respondWith(e){this[u]||(this[u]=Promise.resolve(e))}passThroughOnException(){this[d]=!0}waitUntil(e){this[c].push(e)}}class f extends p{constructor(e){super(e.request),this.sourcePage=e.page}get request(){throw new s({page:this.sourcePage})}respondWith(){throw new s({page:this.sourcePage})}}function g(e,t,r){let s;if(e)for(let i of(r&&(r=r.toLowerCase()),e)){var n,o;let e=null==(n=i.domain)?void 0:n.split(":")[0].toLowerCase();if(t===e||r===i.defaultLocale.toLowerCase()||(null==(o=i.locales)?void 0:o.some(e=>e.toLowerCase()===r))){s=i;break}}return s}function m(e){return e.replace(/\/$/,"")||"/"}function w(e){let t=e.indexOf("#"),r=e.indexOf("?"),s=r>-1&&(t<0||r<t);return s||t>-1?{pathname:e.substring(0,s?r:t),query:s?e.substring(r,t>-1?t:void 0):"",hash:t>-1?e.slice(t):""}:{pathname:e,query:"",hash:""}}function y(e,t){if(!e.startsWith("/")||!t)return e;let{pathname:r,query:s,hash:n}=w(e);return`${t}${r}${s}${n}`}function b(e,t){if(!e.startsWith("/")||!t)return e;let{pathname:r,query:s,hash:n}=w(e);return`${r}${t}${s}${n}`}function x(e,t){if("string"!=typeof e)return!1;let{pathname:r}=w(e);return r===t||r.startsWith(t+"/")}function v(e,t,r,s){return t&&t!==r&&(s||!x(e.toLowerCase(),`/${t.toLowerCase()}`)&&!x(e.toLowerCase(),"/api"))?y(e,`/${t}`):e}function S(e){let t=v(e.pathname,e.locale,e.buildId?void 0:e.defaultLocale,e.ignorePrefix);return(e.buildId||!e.trailingSlash)&&(t=m(t)),e.buildId&&(t=b(y(t,`/_next/data/${e.buildId}`),"/"===e.pathname?"index.json":".json")),t=y(t,e.basePath),!e.buildId&&e.trailingSlash?t.endsWith("/")?t:b(t,"/"):m(t)}function _(e,t){var r;return null==(r=!Array.isArray(null==t?void 0:t.host)&&(null==t?void 0:t.host)||e.hostname)?void 0:r.split(":")[0].toLowerCase()}function C(e,t){let r;let s=e.split("/");return(t||[]).some(t=>!!s[1]&&s[1].toLowerCase()===t.toLowerCase()&&(r=t,s.splice(1,1),e=s.join("/")||"/",!0)),{pathname:e,detectedLocale:r}}function L(e,t){if(x(e,t)){let r=e.slice(t.length);return r.startsWith("/")?r:`/${r}`}return e}function P(e,t){var r;let{basePath:s,i18n:n,trailingSlash:o}=null!=(r=t.nextConfig)?r:{},i={pathname:e,trailingSlash:"/"!==e?e.endsWith("/"):o};if(s&&x(i.pathname,s)&&(i.pathname=L(i.pathname,s),i.basePath=s),!0===t.parseData&&i.pathname.startsWith("/_next/data/")&&i.pathname.endsWith(".json")){let e=i.pathname.replace(/^\/_next\/data\//,"").replace(/\.json$/,"").split("/"),t=e[0];i.pathname="index"!==e[1]?`/${e.slice(1).join("/")}`:"/",i.buildId=t}if(n){let e=C(i.pathname,n.locales);i.locale=null==e?void 0:e.detectedLocale,i.pathname=(null==e?void 0:e.pathname)||i.pathname}return i}let $=/(?!^https?:\/\/)(127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}|::1|localhost)/;function j(e,t){return new URL(String(e).replace($,"localhost"),t&&String(t).replace($,"localhost"))}let E=Symbol("NextURLInternal");class R{constructor(e,t,r){let s,n;"object"==typeof t&&"pathname"in t||"string"==typeof t?(s=t,n=r||{}):n=r||t||{},this[E]={url:j(e,s??n.base),options:n,basePath:""},this.analyzeUrl()}analyzeUrl(){var e,t,r,s,n;let o=P(this[E].url.pathname,{nextConfig:this[E].options.nextConfig,parseData:!0});this[E].domainLocale=g(null==(e=this[E].options.nextConfig)?void 0:null==(t=e.i18n)?void 0:t.domains,_(this[E].url,this[E].options.headers));let i=(null==(r=this[E].domainLocale)?void 0:r.defaultLocale)||(null==(s=this[E].options.nextConfig)?void 0:null==(n=s.i18n)?void 0:n.defaultLocale);this[E].url.pathname=o.pathname,this[E].defaultLocale=i,this[E].basePath=o.basePath??"",this[E].buildId=o.buildId,this[E].locale=o.locale??i,this[E].trailingSlash=o.trailingSlash}formatPathname(){return S({basePath:this[E].basePath,buildId:this[E].buildId,defaultLocale:this[E].options.forceLocale?void 0:this[E].defaultLocale,locale:this[E].locale,pathname:this[E].url.pathname,trailingSlash:this[E].trailingSlash})}formatSearch(){return this[E].url.search}get buildId(){return this[E].buildId}set buildId(e){this[E].buildId=e}get locale(){return this[E].locale??""}set locale(e){var t,r;if(!this[E].locale||!(null==(t=this[E].options.nextConfig)?void 0:null==(r=t.i18n)?void 0:r.locales.includes(e)))throw TypeError(`The NextURL configuration includes no locale "${e}"`);this[E].locale=e}get defaultLocale(){return this[E].defaultLocale}get domainLocale(){return this[E].domainLocale}get searchParams(){return this[E].url.searchParams}get host(){return this[E].url.host}set host(e){this[E].url.host=e}get hostname(){return this[E].url.hostname}set hostname(e){this[E].url.hostname=e}get port(){return this[E].url.port}set port(e){this[E].url.port=e}get protocol(){return this[E].url.protocol}set protocol(e){this[E].url.protocol=e}get href(){let e=this.formatPathname(),t=this.formatSearch();return`${this.protocol}//${this.host}${e}${t}${this.hash}`}set href(e){this[E].url=j(e),this.analyzeUrl()}get origin(){return this[E].url.origin}get pathname(){return this[E].url.pathname}set pathname(e){this[E].url.pathname=e}get hash(){return this[E].url.hash}set hash(e){this[E].url.hash=e}get search(){return this[E].url.search}set search(e){this[E].url.search=e}get password(){return this[E].url.password}set password(e){this[E].url.password=e}get username(){return this[E].url.username}set username(e){this[E].url.username=e}get basePath(){return this[E].basePath}set basePath(e){this[E].basePath=e.startsWith("/")?e:`/${e}`}toString(){return this.href}toJSON(){return this.href}[Symbol.for("edge-runtime.inspect.custom")](){return{href:this.href,origin:this.origin,protocol:this.protocol,username:this.username,password:this.password,host:this.host,hostname:this.hostname,port:this.port,pathname:this.pathname,search:this.search,searchParams:this.searchParams,hash:this.hash}}clone(){return new R(String(this),this[E].options)}}var k=r(768);let I=Symbol("internal request");class A extends Request{constructor(e,t={}){let r="string"!=typeof e&&"url"in e?e.url:String(e);h(r),super(r,t),this[I]={cookies:new k.RequestCookies(this.headers),geo:t.geo||{},ip:t.ip,url:new R(r,{headers:l(this.headers),nextConfig:t.nextConfig})}}[Symbol.for("edge-runtime.inspect.custom")](){return{cookies:this.cookies,geo:this.geo,ip:this.ip,nextUrl:this.nextUrl,url:this.url,bodyUsed:this.bodyUsed,cache:this.cache,credentials:this.credentials,destination:this.destination,headers:Object.fromEntries(this.headers),integrity:this.integrity,keepalive:this.keepalive,method:this.method,mode:this.mode,redirect:this.redirect,referrer:this.referrer,referrerPolicy:this.referrerPolicy,signal:this.signal}}get cookies(){return this[I].cookies}get geo(){return this[I].geo}get ip(){return this[I].ip}get nextUrl(){return this[I].url}get page(){throw new n}get ua(){throw new o}get url(){return this[I].url.toString()}}let q=Symbol("internal response"),O=new Set([301,302,303,307,308]);function U(e,t){var r;if(null==e?void 0:null==(r=e.request)?void 0:r.headers){if(!(e.request.headers instanceof Headers))throw Error("request.headers must be an instance of Headers");let r=[];for(let[s,n]of e.request.headers)t.set("x-middleware-request-"+s,n),r.push(s);t.set("x-middleware-override-headers",r.join(","))}}class T extends Response{constructor(e,t={}){super(e,t),this[q]={cookies:new k.ResponseCookies(this.headers),url:t.url?new R(t.url,{headers:l(this.headers),nextConfig:t.nextConfig}):void 0}}[Symbol.for("edge-runtime.inspect.custom")](){return{cookies:this.cookies,url:this.url,body:this.body,bodyUsed:this.bodyUsed,headers:Object.fromEntries(this.headers),ok:this.ok,redirected:this.redirected,status:this.status,statusText:this.statusText,type:this.type}}get cookies(){return this[q].cookies}static json(e,t){let r=Response.json(e,t);return new T(r.body,r)}static redirect(e,t){let r="number"==typeof t?t:(null==t?void 0:t.status)??307;if(!O.has(r))throw RangeError('Failed to execute "redirect" on "response": Invalid status code');let s="object"==typeof t?t:{},n=new Headers(null==s?void 0:s.headers);return n.set("Location",h(e)),new T(null,{...s,headers:n,status:r})}static rewrite(e,t){let r=new Headers(null==t?void 0:t.headers);return r.set("x-middleware-rewrite",h(e)),U(t,r),new T(null,{...t,headers:r})}static next(e){let t=new Headers(null==e?void 0:e.headers);return t.set("x-middleware-next","1"),U(e,t),new T(null,{...e,headers:t})}}function N(e,t){let r="string"==typeof t?new URL(t):t,s=new URL(e,t),n=`${r.protocol}//${r.host}`;return`${s.protocol}//${s.host}`===n?s.toString().replace(n,""):s.toString()}let D=["__nextFallback","__nextLocale","__nextDefaultLocale","__nextIsNotFound"],W=["__nextDataReq"];function H(e,t){for(let t of D)e.delete(t);if(t)for(let t of W)e.delete(t);return e}function M(e,t){return t?e.replace(/\.rsc($|\?)/,"$1"):e}class z extends A{constructor(e){super(e.input,e.init),this.sourcePage=e.page}get request(){throw new s({page:this.sourcePage})}respondWith(){throw new s({page:this.sourcePage})}waitUntil(){throw new s({page:this.sourcePage})}}let J=[["RSC"],["Next-Router-State-Tree"],["Next-Router-Prefetch"],["x-vercel-sc-headers"]];async function F(e){let t=void 0!==self.__BUILD_MANIFEST;e.request.url=M(e.request.url,!0);let r=new R(e.request.url,{headers:e.request.headers,nextConfig:e.request.nextConfig}),s=r.buildId;r.buildId="";let n=e.request.headers["x-nextjs-data"];n&&"/index"===r.pathname&&(r.pathname="/");let o=i(e.request.headers),a=new Map;if(!t)for(let e of J){let t=e.toString().toLowerCase(),r=o.get(t);r&&(a.set(t,o.get(t)),o.delete(t))}H(r.searchParams,!0);let l=new z({page:e.page,input:String(r),init:{body:e.request.body,geo:e.request.geo,headers:o,ip:e.request.ip,method:e.request.method,nextConfig:e.request.nextConfig}});n&&Object.defineProperty(l,"__isData",{enumerable:!1,value:!0});let h=new f({request:l,page:e.page}),u=await e.handler(l,h);if(u&&!(u instanceof Response))throw TypeError("Expected an instance of Response to be returned");let d=null==u?void 0:u.headers.get("x-middleware-rewrite");if(u&&d){let t=new R(d,{forceLocale:!0,headers:e.request.headers,nextConfig:e.request.nextConfig});t.host===l.nextUrl.host&&(t.buildId=s||t.buildId,u.headers.set("x-middleware-rewrite",String(t)));let o=N(String(t),String(r));n&&u.headers.set("x-nextjs-rewrite",o)}let p=null==u?void 0:u.headers.get("Location");if(u&&p){let t=new R(p,{forceLocale:!1,headers:e.request.headers,nextConfig:e.request.nextConfig});u=new Response(u.body,u),t.host===l.nextUrl.host&&(t.buildId=s||t.buildId,u.headers.set("Location",String(t))),n&&(u.headers.delete("Location"),u.headers.set("x-nextjs-redirect",N(String(t),String(r))))}let g=u||T.next(),m=g.headers.get("x-middleware-override-headers"),w=[];if(m){for(let[e,t]of a)g.headers.set(`x-middleware-request-${e}`,t),w.push(e);w.length>0&&g.headers.set("x-middleware-override-headers",m+","+w.join(","))}return{response:g,waitUntil:Promise.all(h[c])}}function B(e){return`The edge runtime does not support Node.js '${e}' module.
Learn More: https://nextjs.org/docs/messages/node-module-in-edge-runtime`}function Y(e){let t=new Proxy(function(){},{get(t,r){if("then"===r)return{};throw Error(B(e))},construct(){throw Error(B(e))},apply(r,s,n){if("function"==typeof n[0])return n[0](t);throw Error(B(e))}});return new Proxy({},{get:()=>t})}!function(){if(process!==r.g.process&&(process.env=r.g.process.env,r.g.process=process),Object.defineProperty(globalThis,"__import_unsupported",{value:Y,enumerable:!1,configurable:!1}),"_ENTRIES"in globalThis&&_ENTRIES.middleware_instrumentation&&_ENTRIES.middleware_instrumentation.register)try{_ENTRIES.middleware_instrumentation.register()}catch(e){throw e.message=`An error occurred while loading instrumentation hook: ${e.message}`,e}}();var G=r(46),K=G.middleware||G.default;if("function"!=typeof K)throw Error('The Edge Function "pages/api/chat" must export a `default` function');function Q(e){return F({...e,page:"/api/chat",handler:K})}},46:(e,t,r)=>{"use strict";r.r(t),r.d(t,{config:()=>i,default:()=>l});var s=r(511);let n=s.j;s.default;let o=async e=>{let t=new TextEncoder,r=new TextDecoder,s=await fetch("https://api.openai.com/v1/chat/completions",{headers:{"Content-Type":"application/json",Authorization:"Bearer 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"},method:"POST",body:JSON.stringify({model:"gpt-3.5-turbo",messages:[{role:"system",content:"You are a helpful, friendly, assistant."},...e],max_tokens:800,temperature:0,stream:!0})});if(200!==s.status)throw Error("OpenAI API returned an error");let o=new ReadableStream({async start(e){let o=r=>{if("event"===r.type){let s=r.data;if("[DONE]"===s){e.close();return}try{let r=JSON.parse(s),n=r.choices[0].delta.content,o=t.encode(n);e.enqueue(o)}catch(t){e.error(t)}}},i=n(o);for await(let e of s.body)i.feed(r.decode(e))}});return o},i={runtime:"edge"},a=async e=>{try{let{messages:t}=await e.json(),r=0,s=[];for(let e=0;e<t.length;e++){let n=t[e];if(r+n.content.length>12e3)break;r+=n.content.length,s.push(n)}let n=await o(s);return new Response(n)}catch(e){return console.error(e),new Response("Error",{status:500})}},l=a},768:e=>{"use strict";var t=Object.defineProperty,r=Object.getOwnPropertyDescriptor,s=Object.getOwnPropertyNames,n=Object.prototype.hasOwnProperty,o=(e,o,i,a)=>{if(o&&"object"==typeof o||"function"==typeof o)for(let l of s(o))n.call(e,l)||l===i||t(e,l,{get:()=>o[l],enumerable:!(a=r(o,l))||a.enumerable});return e},i=e=>o(t({},"__esModule",{value:!0}),e),a={};function l(e){let t=["path"in e&&e.path&&`Path=${e.path}`,"expires"in e&&e.expires&&`Expires=${e.expires.toUTCString()}`,"maxAge"in e&&e.maxAge&&`Max-Age=${e.maxAge}`,"domain"in e&&e.domain&&`Domain=${e.domain}`,"secure"in e&&e.secure&&"Secure","httpOnly"in e&&e.httpOnly&&"HttpOnly","sameSite"in e&&e.sameSite&&`SameSite=${e.sameSite}`].filter(Boolean);return`${e.name}=${encodeURIComponent(e.value??"")}; ${t.join("; ")}`}function h(e){let t=new Map;for(let r of e.split(/; */)){if(!r)continue;let e=r.indexOf("="),[s,n]=[r.slice(0,e),r.slice(e+1)];try{t.set(s,decodeURIComponent(n??"true"))}catch{}}return t}function u(e){if(!e)return;let[[t,r],...s]=h(e),{domain:n,expires:o,httponly:i,maxage:a,path:l,samesite:u,secure:c}=Object.fromEntries(s.map(([e,t])=>[e.toLowerCase(),t])),f={name:t,value:decodeURIComponent(r),domain:n,...o&&{expires:new Date(o)},...i&&{httpOnly:!0},..."string"==typeof a&&{maxAge:Number(a)},path:l,...u&&{sameSite:p(u)},...c&&{secure:!0}};return d(f)}function d(e){let t={};for(let r in e)e[r]&&(t[r]=e[r]);return t}((e,r)=>{for(var s in r)t(e,s,{get:r[s],enumerable:!0})})(a,{RequestCookies:()=>f,ResponseCookies:()=>g}),e.exports=i(a);var c=["strict","lax","none"];function p(e){return e=e.toLowerCase(),c.includes(e)?e:void 0}var f=class{constructor(e){this._parsed=new Map,this._headers=e;let t=e.get("cookie");if(t){let e=h(t);for(let[t,r]of e)this._parsed.set(t,{name:t,value:r})}}[Symbol.iterator](){return this._parsed[Symbol.iterator]()}get size(){return this._parsed.size}get(...e){let t="string"==typeof e[0]?e[0]:e[0].name;return this._parsed.get(t)}getAll(...e){var t;let r=Array.from(this._parsed);if(!e.length)return r.map(([e,t])=>t);let s="string"==typeof e[0]?e[0]:null==(t=e[0])?void 0:t.name;return r.filter(([e])=>e===s).map(([e,t])=>t)}has(e){return this._parsed.has(e)}set(...e){let[t,r]=1===e.length?[e[0].name,e[0].value]:e,s=this._parsed;return s.set(t,{name:t,value:r}),this._headers.set("cookie",Array.from(s).map(([e,t])=>l(t)).join("; ")),this}delete(e){let t=this._parsed,r=Array.isArray(e)?e.map(e=>t.delete(e)):t.delete(e);return this._headers.set("cookie",Array.from(t).map(([e,t])=>l(t)).join("; ")),r}clear(){return this.delete(Array.from(this._parsed.keys())),this}[Symbol.for("edge-runtime.inspect.custom")](){return`RequestCookies ${JSON.stringify(Object.fromEntries(this._parsed))}`}toString(){return[...this._parsed.values()].map(e=>`${e.name}=${encodeURIComponent(e.value)}`).join("; ")}},g=class{constructor(e){var t;this._parsed=new Map,this._headers=e;let r=(null==(t=e.getAll)?void 0:t.call(e,"set-cookie"))??e.get("set-cookie")??[],s=Array.isArray(r)?r:y(r);for(let e of s){let t=u(e);t&&this._parsed.set(t.name,t)}}get(...e){let t="string"==typeof e[0]?e[0]:e[0].name;return this._parsed.get(t)}getAll(...e){var t;let r=Array.from(this._parsed.values());if(!e.length)return r;let s="string"==typeof e[0]?e[0]:null==(t=e[0])?void 0:t.name;return r.filter(e=>e.name===s)}set(...e){let[t,r,s]=1===e.length?[e[0].name,e[0].value,e[0]]:e,n=this._parsed;return n.set(t,w({name:t,value:r,...s})),m(n,this._headers),this}delete(...e){let t="string"==typeof e[0]?e[0]:e[0].name;return this.set({name:t,value:"",expires:new Date(0)})}[Symbol.for("edge-runtime.inspect.custom")](){return`ResponseCookies ${JSON.stringify(Object.fromEntries(this._parsed))}`}toString(){return[...this._parsed.values()].map(l).join("; ")}};function m(e,t){for(let[,r]of(t.delete("set-cookie"),e)){let e=l(r);t.append("set-cookie",e)}}function w(e={name:"",value:""}){return e.maxAge&&(e.expires=new Date(Date.now()+1e3*e.maxAge)),(null===e.path||void 0===e.path)&&(e.path="/"),e}function y(e){if(!e)return[];var t,r,s,n,o,i=[],a=0;function l(){for(;a<e.length&&/\s/.test(e.charAt(a));)a+=1;return a<e.length}for(;a<e.length;){for(t=a,o=!1;l();)if(","===(r=e.charAt(a))){for(s=a,a+=1,l(),n=a;a<e.length&&"="!==(r=e.charAt(a))&&";"!==r&&","!==r;)a+=1;a<e.length&&"="===e.charAt(a)?(o=!0,a=n,i.push(e.substring(t,s)),t=a):a=s+1}else a+=1;(!o||a>=e.length)&&i.push(e.substring(t,e.length))}return i}}},e=>{var t=e(e.s=542);(_ENTRIES="undefined"==typeof _ENTRIES?{}:_ENTRIES)["middleware_pages/api/chat"]=t}]);
//# sourceMappingURL=chat.js.map