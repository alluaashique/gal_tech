@extends('layouts.app')
@section('content')
    <div class="row">        
        <div class="col-sm-12">




<script nonce='6dc399fe-b036-4ff6-a19f-7b4780e1ab90'>!function(){"use strict";function t(t,n){let e;return(...o)=>{clearTimeout(e),e=setTimeout((()=>{t(...o)}),n)}}class n{constructor(){this.callbacks=[],window.addEventListener("DOMContentLoaded",(()=>this.onDOMContentLoaded()))}onDOMContentLoaded(){this.callbacks.sort(((t,n)=>t.priority-n.priority)).forEach((({callback:t})=>t()))}runOnLoad(t){"loading"===document.readyState?this.callbacks.push(t):t.callback()}}function e(t,e=Number.MAX_VALUE){var o;(window.canva_scriptExecutor=null!==(o=window.canva_scriptExecutor)&&void 0!==o?o:new n).runOnLoad({callback:t,priority:e})}class o{constructor(t){this.items=[],this.previousWidth=document.documentElement.clientWidth,this.previousHeight=window.innerHeight;const n=t((()=>this.onWindowResize()),100);window.addEventListener("resize",n)}onWindowResize(){const t=document.documentElement.clientWidth,n=window.innerHeight,e=this.previousWidth!==t,o=this.previousHeight!==n;this.items.forEach((t=>{const n=()=>{t.callback(),t.executed=!0};(!t.executed||e&&t.options.runOnWidthChange||o&&t.options.runOnHeightChange)&&n()})),this.previousWidth=t,this.previousHeight=n}runOnResize(t,n){this.items.push({callback:t,options:n,executed:n.runOnLoad}),this.items.sort(((t,n)=>t.options.priority-n.options.priority)),n.runOnLoad&&e(t,n.priority)}}function i(n,e,i=t){var r;(window.canva_debounceResize=null!==(r=window.canva_debounceResize)&&void 0!==r?r:new o(i)).runOnResize(n,{runOnLoad:!1,runOnWidthChange:!0,runOnHeightChange:!1,priority:Number.MAX_VALUE,...e})}const r="--minfs",c="--rzf",a="--rfso",s="--bfso";function u(t,n,e=.001){return Math.abs(t-n)<e}function d(t,n){return window.getComputedStyle(t).getPropertyValue(n)}function l(t,n,e){t.style.setProperty(n,e)}function m(t,n){const e=document.createElement("div");e.style.setProperty(t,n),document.body.append(e);const o=d(e,t);return e.remove(),o}function f(){const t=function(){const t=parseFloat(m("font-size","0.1px"));return t>1?t:0}(),n=function(t){const n=2*Math.max(t,1);return n/parseFloat(m("font-size",`${n}px`))}(t);if(function(t){if(0===t)return;l(document.documentElement,r,`${t}px`),i((()=>{const n=100*t,{clientWidth:e}=document.documentElement;l(document.documentElement,c,n>e?(e/n).toPrecision(4):null)}),{runOnLoad:!0})}(t*Math.max(1,n)),u(n,1))return;const e=u(parseFloat(d(document.documentElement,"font-size")),parseFloat(m("grid-template-columns","1rem")));l(document.documentElement,e?a:s,n.toPrecision(4))}function h(){document.querySelectorAll("img, image, video, svg").forEach((t=>t.addEventListener("contextmenu",(t=>t.preventDefault()))))}const p=t=>{const n={type:"CLICKED_LINK",link:t.currentTarget.getAttribute("href")};navigator.sendBeacon("_api/analytics/events",JSON.stringify(n))};function g(){[...document.querySelectorAll("a[href][data-interstitial-link]")].forEach((t=>{t.addEventListener("click",p)}))}const v="--sbw",w="--inner1Vh";function y(t,n,e){t.style.setProperty(n,e)}function E(){y(document.documentElement,w,window.innerHeight/100+"px"),function(){const t=window.innerWidth-document.documentElement.clientWidth;y(document.documentElement,v,t>=0?`${t}px`:null)}()}var b;const O="undefined"!=typeof window?null===(b=window.navigator)||void 0===b?void 0:b.userAgent:void 0;const L=!(!O||(A=O,!A.match(/AppleWebKit\//)||A.match(/Chrome\//)||A.match(/Chromium\//)));var A;function x(){document.querySelectorAll("svg").forEach((t=>t.style.background="url('data:image/png;base64,')"))}let C;function W(){C||(C=Array.from(document.querySelectorAll("foreignObject")).filter((t=>0===t.getBoundingClientRect().width)));const t=function(){const t=document.createElement("div");t.style.fontSize="100vw",document.body.append(t);const n=parseFloat(window.getComputedStyle(t).fontSize);return t.remove(),n/window.innerWidth}();Array.from(C).forEach((n=>function(t){return new Promise(((n,e)=>{const o=t.querySelector("img");o&&!o.complete?(o.addEventListener("load",(()=>n())),o.addEventListener("error",(()=>e()))):n()}))}(n).finally((()=>function(t,n){const e=Array.from(t.children);e.forEach(((t,n)=>{if(t.hasAttribute("data-foreign-object-container"))t.style.transformOrigin="",t.style.transform="";else{const o=document.createElement("div");o.setAttribute("data-foreign-object-container",""),t.insertAdjacentElement("beforebegin",o),t.remove(),o.append(t),e[n]=o}}));const o=t.getScreenCTM();if(!o)return;const{a:i,b:r,c:c,d:a}=o.scale(n);e.forEach((t=>{if(!t.hasAttribute("data-foreign-object-container"))return;const{style:n}=t;n.transformOrigin="0px 0px",n.transform=`matrix(${i}, ${r}, ${c}, ${a}, 0, 0)`}))}(n,t)))))}[function(){e(f)},function(){i(E,{runOnLoad:!0,runOnHeightChange:!0,priority:1})},function(){L&&i(W,{runOnLoad:!0})},function(){L&&e(x)},function(){e(h)},function(){e(g)}].forEach((t=>t()))}();</script><script nonce="6dc399fe-b036-4ff6-a19f-7b4780e1ab90">
    window.C_CAPTCHA_IMPLEMENTATION = 'RECAPTCHA';
</script><script nonce="6dc399fe-b036-4ff6-a19f-7b4780e1ab90">
    window.C_CAPTCHA_KEY = '6Ldk59waAAAAAMPqkICbJjfMivZLCGtTpa6Wn6zO';
</script></head>
<body>
<div id="root">
    <section id="CW4rGmm0V2POnTfT" style="z-index:0;overflow:hidden;display:grid;position:relative;align-items:center;">
      <div id="zxWylEe6wzdROQiy" style="background-color:#fff8ed;transform:scale(1, 1);overflow:hidden;width:100%;opacity:1.0;height:100%;top:0%;left:0%;position:absolute;">
        <div id="GeoCRlVGItfLqBld" style="background-repeat:no-repeat;background-size:cover;top:-0.02441406%;left:0%;width:100%;background-image:url(images/08cffdf9095962c4b326e5e02f374636.png);background-position:center;position:relative;opacity:1.0;height:100.04882812%;">
        </div>
      </div>
      <div id="HyUmtG0Pf7lsf8cc">
        <div id="SSIBzw4ZlGJePMdO">
          <div id="KsmqkOP7XREHmxlA" style="padding-top:13.8678772%;transform:rotate(0deg);">
            <div id="JjmefKR9JQDLqPEP" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="alGs7DTGCKDBT4tP" style="flex-direction:column;display:flex;width:100%;justify-content:center;opacity:1.0;height:100%;">
                <p id="khvxeTKQ10EkRam8" style="color:#212221;letter-spacing:-0.06em;font-family:YAD1aU3sLnI-0;line-height:1.4em;text-align:center;"><span id="SzeQr00A3KuzJs96" style="color:#212221;">Online Quiz - Login</span><br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="ohA2GTIkOlSLajXW" style="z-index:0;overflow:hidden;display:grid;margin-top:-1px;position:relative;align-items:center;">
      <div id="qQSBXxW4HRqS4UUG" style="background-color:#ffbde7;transform:scale(1, 1);overflow:hidden;width:100%;opacity:1.0;height:100%;top:0%;left:0%;position:absolute;">
        <div id="Z1hRYvw1NBje4pSL" style="background-repeat:no-repeat;background-size:cover;top:-38.93229167%;left:0%;width:100%;background-image:url(images/f8a4dbcf8d996f54871b9cf7d31b60a9.png);background-position:center;position:relative;opacity:0.99;height:177.86458333%;">
        </div>
      </div>
      <div id="WdjuqQHzapxeUGdU">
        <div id="fVo4nO6U58YrA5DT">
          <div id="gyZFFHz3y4TtsHEo" style="padding-top:13.8678772%;transform:rotate(0deg);">
            <div id="yXcmijij12dBK0jm" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="VE5HEdnVEQnuihFV" style="flex-direction:column;display:flex;width:100%;justify-content:center;opacity:1.0;height:100%;">
                <p id="Z8hpwnOgwi2k76g8" style="color:#212221;letter-spacing:-0.06em;font-family:YAD1aU3sLnI-0;line-height:1.4em;text-align:center;"><span id="COX70PMpIjwYuywy" style="color:#212221;">Online Quiz - Signup</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="wBP643cRrDXm0aJy">
          <div id="fJfc3eOAGA9gJoX7" style="padding-top:80.52675349%;transform:rotate(0deg);">
            <div id="ZCYdWntPHQG4zKvr" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="yflAzFsyJqJoSCZm" style="width:100%;opacity:1.0;height:100%;">
                <div id="X7ys13UQVgQ3rca4" style="transform:scale(1, 1);overflow:hidden;width:100%;height:100%;">
                  <div id="A2qj66i62yfkeU0j" style="transform:rotate(0deg);top:-11.39092364%;left:-1.89780848%;width:105.37712403%;position:relative;opacity:1.0;height:116.88999022%;animation:anim-pulse 1.5s ease-in-out infinite;">
                    <img src="images/c0d77fb01758c231dcd4353c02cf9659.png" alt="" loading="lazy" style="width:100%;height:100%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="uxYUVS9ZJ7zYPj2R" style="z-index:0;overflow:hidden;display:grid;margin-top:-1px;position:relative;align-items:center;">
      <div id="dEboic3WeqPBxC5h" style="background-color:#ffbde7;transform:scale(1, 1);overflow:hidden;width:100%;opacity:1.0;height:100%;top:0%;left:0%;position:absolute;">
        <div id="IU3bSoQ2JjUU0C94" style="background-repeat:no-repeat;background-size:cover;top:-38.93229167%;left:0%;width:100%;background-image:url(images/f8a4dbcf8d996f54871b9cf7d31b60a9.png);background-position:center;position:relative;opacity:0.99;height:177.86458333%;">
        </div>
      </div>
      <div id="l8vLGqwePF86eesO">
        <div id="ZJjmPrST3TAWp656">
          <div id="ypexZVhThaFxvCow" style="padding-top:30.06472448%;transform:rotate(0deg);">
            <div id="JSTGQfV1e5zfCNEX" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="BY6OnEzDQuNF8vuo" style="flex-direction:column;display:flex;width:100%;justify-content:center;opacity:1.0;height:100%;">
                <p id="qOQekeboZifAfO6G" style="color:#212221;letter-spacing:-0.06em;font-family:YAD1aU3sLnI-0;line-height:1.4em;text-align:center;"><span id="fslkI6x3pBnH1UDa" style="color:#212221;">Online Quiz </span></p>
                <p id="Xchk6qVlHagkGbVl" style="color:#212221;letter-spacing:-0.06em;font-family:YAD1aU3sLnI-0;line-height:1.4em;text-align:center;"><span id="QldOHN9bQTbGV82Z" style="color:#212221;">Select Quiz Type</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="Iy4bfU1qDOcc0lCn">
          <div id="feXdVadKTXW429gi" style="padding-top:22.54274511%;transform:rotate(0deg);">
            <div id="bsYL4lvNGIVAUOaV" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="TMbxUwG7yggaAAGN" viewBox="0 0 141.9525 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="AgmqmzutUNn0CbWm" style="transform:scale(1, 1);">
                  <path id="BTII0NIo61miRGEa" d="M125.95254327101898,0.0 C134.789098751976,0.0 141.95254327101898,7.1634440422058105 141.95254327101898,16.0 C141.95254327101898,24.83655548095703 134.789098751976,32.0 125.95254327101898,32.0 L16.0,32.0 C7.1634440422058105,32.0 0.0,24.83655548095703 0.0,16.0 C0.0,7.1634440422058105 7.1634440422058105,0.0 16.0,0.0 L125.95254327101898,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="qkFJnF5ZHFeM5chX">
          <div id="YNWk7j3m2v3T47fc" style="padding-top:32.2333921%;transform:rotate(0deg);">
            <div id="e7kG95cie75Y0Ka5" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="n9tGPyGGFxYtd5Fd" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="NQir092ZlneaepQP" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="iLYrcj2mSOZqa8Ks" style="color:#ffffff;">Arts &amp; Literature</span></p>
                <p id="pI5vLD1WbI7T2Txw" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="boUi7z3qBvRCaKD0">
          <div id="xk6sL2l2EwGSIjdZ" style="padding-top:22.54274511%;transform:rotate(0deg);">
            <div id="C4Gi7enqVnLLNOvC" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="ZYiJjHgtHcMI8c8T" viewBox="0 0 141.9525 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="T2wBZ0IMyaNJ7X9R" style="transform:scale(1, 1);">
                  <path id="WYEwmH20Gt92pqYr" d="M125.95254327101898,0.0 C134.789098751976,0.0 141.95254327101898,7.1634440422058105 141.95254327101898,16.0 C141.95254327101898,24.83655548095703 134.789098751976,32.0 125.95254327101898,32.0 L16.0,32.0 C7.1634440422058105,32.0 0.0,24.83655548095703 0.0,16.0 C0.0,7.1634440422058105 7.1634440422058105,0.0 16.0,0.0 L125.95254327101898,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="GvoQDb4YVsVqLFTe">
          <div id="eRRFpSLkET1n70oP" style="padding-top:33.44679524%;transform:rotate(0deg);">
            <div id="cOKiFgLIpB5jbQ3n" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="fd4PUYICvVORomKB" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="sjbbym9OEIATUaTs" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="uNEzzBJnKXA4p3pp" style="color:#ffffff;">History</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="A2wZzBca3vAaa6LN">
          <div id="FhAjOvgflyTy3yl3" style="padding-top:22.54274511%;transform:rotate(0deg);">
            <div id="TplyAGCbnA0RocbB" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="PmtcL5NEH1In72l8" viewBox="0 0 141.9525 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="UJu2FHwj2CThp1EG" style="transform:scale(1, 1);">
                  <path id="o9AP8fL1tMAs2K8s" d="M125.95254327101898,0.0 C134.789098751976,0.0 141.95254327101898,7.1634440422058105 141.95254327101898,16.0 C141.95254327101898,24.83655548095703 134.789098751976,32.0 125.95254327101898,32.0 L16.0,32.0 C7.1634440422058105,32.0 0.0,24.83655548095703 0.0,16.0 C0.0,7.1634440422058105 7.1634440422058105,0.0 16.0,0.0 L125.95254327101898,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="mBtxBxBzWtR4eRRK">
          <div id="oUufz9OPNxidBeif" style="padding-top:26.56582674%;transform:rotate(0deg);">
            <div id="qlklOWxFno4K9oNP" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="l6rnAlBcksCrQmSJ" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="Yj6kyq2xarmCZlia" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="biXszbkYR3CSNzSB" style="color:#ffffff;">Film &amp; TV</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="vvvMcemU1RDhUVmH">
          <div id="J0LR6yjjZ4KNskDu" style="padding-top:22.54274511%;transform:rotate(0deg);">
            <div id="qxKwh7PmpSnjKJzQ" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="KftyHLYho49Jxn98" viewBox="0 0 141.9525 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="daSRof4wV4t0RMoc" style="transform:scale(1, 1);">
                  <path id="sBDJpeaFWX0gtj2J" d="M125.95254327101898,0.0 C134.789098751976,0.0 141.95254327101898,7.1634440422058105 141.95254327101898,16.0 C141.95254327101898,24.83655548095703 134.789098751976,32.0 125.95254327101898,32.0 L16.0,32.0 C7.1634440422058105,32.0 0.0,24.83655548095703 0.0,16.0 C0.0,7.1634440422058105 7.1634440422058105,0.0 16.0,0.0 L125.95254327101898,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="idOlTHNdqDPo9XIF">
          <div id="SuRSlxrt7zBkRahl" style="padding-top:22.33336087%;transform:rotate(0deg);">
            <div id="u7SU9yfU03PwMSuX" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="WXstaqTV9soJUlG2" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="Ly5zQgJkx8sGQtYn" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="eJBxo7A9shBY5tZG" style="color:#ffffff;">Geography</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="easVI8SChDzy48kH">
          <div id="oL5HFj5BBLziN93B" style="padding-top:22.54274511%;transform:rotate(0deg);">
            <div id="Ilss89qlhPyA4hVy" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="g7TfBxIKarsenJPu" viewBox="0 0 141.9525 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="TNb1Ifa8lDownJRm" style="transform:scale(1, 1);">
                  <path id="h1PHq3oee7R4EVme" d="M125.95254327101898,0.0 C134.789098751976,0.0 141.95254327101898,7.1634440422058105 141.95254327101898,16.0 C141.95254327101898,24.83655548095703 134.789098751976,32.0 125.95254327101898,32.0 L16.0,32.0 C7.1634440422058105,32.0 0.0,24.83655548095703 0.0,16.0 C0.0,7.1634440422058105 7.1634440422058105,0.0 16.0,0.0 L125.95254327101898,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="gpeyb8ueF8O5fzWW">
          <div id="BqmnDRjGgSNj9OaL" style="padding-top:19.17420977%;transform:rotate(0deg);">
            <div id="RDzKsv556Nv4TnRX" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="A7PE5cKnwHX097pe" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="uR5BLamZh4Wspws6" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="UyPLgQQuU1CtOWHK" style="color:#ffffff;">Food &amp; Drink</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="rYhgTYyrFGp6TM1k">
          <div id="mS7pYSoab6U9gDqr" style="padding-top:22.54274511%;transform:rotate(0deg);">
            <div id="ySK4Gi3KhbHF8DHL" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="oRF4paGwTOnHxm1Z" viewBox="0 0 141.9525 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="abvJCAPOzzdLgYUA" style="transform:scale(1, 1);">
                  <path id="mJSbuAqLFZnmBJdR" d="M125.95254327101898,0.0 C134.789098751976,0.0 141.95254327101898,7.1634440422058105 141.95254327101898,16.0 C141.95254327101898,24.83655548095703 134.789098751976,32.0 125.95254327101898,32.0 L16.0,32.0 C7.1634440422058105,32.0 0.0,24.83655548095703 0.0,16.0 C0.0,7.1634440422058105 7.1634440422058105,0.0 16.0,0.0 L125.95254327101898,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="UZXhpSOxY4giMoJ6">
          <div id="wWwXABSRPWjfEsa3" style="padding-top:12.68807249%;transform:rotate(0deg);">
            <div id="mgWAU5g3OQlxrvs2" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="B0mk37eIfmImoWye" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="FNoGaq2USaeblqwj" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="IirsDDT4RRBOJb6o" style="color:#ffffff;">General Knowledge</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="jc6koWVS2WdkBYhl">
          <div id="v4CnDwPjvsEHBax3" style="padding-top:20.5%;transform:rotate(0deg);">
            <div id="uqaMh7fM3BTuC7js" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="fIfWEheJObrILEnt" style="width:100%;opacity:1.0;height:100%;">
                <div id="jN9Ga0ylfd37Ykxa" style="transform:scale(1, 1);overflow:hidden;width:100%;height:100%;">
                  <div id="se5GecCYNuHoLxIQ" style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:relative;opacity:1.0;height:100%;animation:anim-pulse 1.5s ease-in-out infinite;">
                    <img src="images/4a50d955ca494b5c28788453af992f93.svg" alt="Ellipsis Icon" loading="lazy" style="width:100%;height:100%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="LvWUz77cYWKmjcbB" style="z-index:0;overflow:hidden;display:grid;margin-top:-1px;position:relative;align-items:center;">
      <div id="CIqC1k5ykhSK8F40" style="background-color:#ffbde7;transform:scale(1, 1);overflow:hidden;width:100%;opacity:1.0;height:100%;top:0%;left:0%;position:absolute;">
        <div id="UUPKdPINvYu9spEY" style="background-repeat:no-repeat;background-size:cover;top:-38.93229167%;left:0%;width:100%;background-image:url(images/f8a4dbcf8d996f54871b9cf7d31b60a9.png);background-position:center;position:relative;opacity:0.99;height:177.86458333%;">
        </div>
      </div>
      <div id="oeOllgF5lCtNeJ50">
        <div id="QH2Hiz0V9KeLORQA">
          <div id="n0oGw46GaGS6aNts" style="padding-top:100%;transform:rotate(0deg);">
            <div id="F4nOKCKrqgXZZz11" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="aiVUf1WINPITUZ4V" style="width:100%;opacity:1.0;height:100%;">
                <div id="fnGJwbqpSIu8KJ91" style="transform:scale(1, 1);overflow:hidden;width:100%;height:100%;">
                  <div id="xR16N5X3wWB5GD4g" style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:relative;opacity:1.0;height:100%;animation:anim-pulse 1.5s ease-in-out infinite;">
                    <img src="images/1ffa0cf6de9f96a019b434fe809d9dc4.svg" alt="Number 1 Icon" loading="lazy" style="width:100%;height:100%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="uwASc8t99RnSCmHg">
          <div id="Uh2fhbAXy8kQpXS7" style="padding-top:56.25%;transform:rotate(0deg);">
            <div id="kLJDsc7yPuFxvNwZ" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="seb2LO7dcoBfD6Vz" style="width:100%;opacity:1.0;height:100%;">
                <div id="tCmH1L948UEpeOSy" style="transform:scale(1, 1);overflow:hidden;width:100%;height:100%;">
                  <div id="JttD7DS5cFsU4tp9" style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:relative;opacity:1.0;height:100%;">
                    <video src="videos/a81fba85e66cf3dd0c4fdf1f0616eb91.mp4" playsinline="" preload="metadata" oncanplay="this.volume=0.0" autoplay="" muted="" loop="" style="object-fit:cover;width:100%;height:100%;">
                    </video>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="dbt9akWlH18MyV7X">
          <div id="mfAgYvHNcaXETWJf" style="padding-top:18.31478433%;transform:rotate(0deg);">
            <div id="mHoRXgsI8ryfrQp1" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="NSgXswapCQMfbSqA" viewBox="0 0 265.3403 48.5965" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="DnfSdfVovpPtDWXi" style="transform:scale(1, 1);">
                  <path id="wu3vU0youPS4e6Hy" d="M10.00000063,0.0 L255.34027036,0.0 C257.99243543,0.0 260.53597472,1.05356847 262.41133862,2.92893237 264.28670253,4.80429627 265.34027100000003,7.34783556 265.34027100000003,10.00000063 L265.34027100000003,38.59649976 C265.34027100000003,41.24866483 264.28670253,43.79220412 262.41133862,45.66756803 260.53597472,47.54293193 257.99243543,48.596500400000004 255.34027036,48.596500400000004 L10.00000063,48.596500400000004 C7.34783557,48.596500400000004 4.80429628,47.54293193 2.92893237,45.667568020000004 1.05356847,43.79220412 0.0,41.24866483 0.0,38.59649976 L0.0,10.00000063 C0.0,7.34783557 1.05356847,4.80429628 2.92893237,2.92893237 4.80429627,1.05356847 7.34783556,0.0 10.00000063,0.0 Z" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="YhFVxq8eFgL19BfG">
          <div id="fYbTSqgCWaFQ246I" style="padding-top:16.82646466%;transform:rotate(0deg);">
            <div id="pxoGrUG7sCbMgZYi" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="OjgOCoIhT3QalzKr" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="svONAnRTCJBT555q" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="ECErebG9DxQKog1F" style="color:#ffffff;">Who devised the periodic table </span></p>
                <p id="JqZWADcChj5qsnWP" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="oJIflzFpXsfld5ry" style="color:#ffffff;">of elements?</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="ouUjVyWQyrzmfeV9">
          <div id="BEEYUj6pAJdD096Y" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="MPmK0vm6JcFfMoKV" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="nzXMHcF4eaVHpch6" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="JYHq8Q4VktBdr6kp" style="transform:scale(1, 1);">
                  <path id="FELGsdBWELhiz732" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="I1NruuWqWhJHcNkH">
          <div id="iM6JJl8BZCplrdd7" style="padding-top:13.72187617%;transform:rotate(0deg);">
            <div id="bKNtI5P3zWv31pVH" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="SlEsZvGrVTWzZnlt" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="I2Nr5NTEIpVZkKkv" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="SE6imfEmdvSRBNhi" style="color:#ffffff;">Dmitri Mendeleev</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="qFbOCqCW442Oq5jq">
          <div id="lxbWz4rkHsGoYAYU" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="aYVIqG5G8zvFSqoI" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="wum9WmnTatisSeN6" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="fQjtcFu7xzJZhOuI" style="transform:scale(1, 1);">
                  <path id="rl2myTwiZCAsUuwK" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="bnYKbrEnouCT9dNt">
          <div id="jbpE9p1UF2ue5hdj" style="padding-top:14.99303196%;transform:rotate(0deg);">
            <div id="eOY88uXMnPfkGukE" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="iFnKAcOUe54PD4yU" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="QiaSlrvT6SFSF6hi" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="vzvvm5Dzk728zObS" style="color:#ffffff;">Michael Faraday</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="pNduzNIuhbv3MxTw">
          <div id="ZxcROTFNFM5Nk9hr" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="HFnB1QbeMSRAGQSZ" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="YVMYPCDtesgsCfru" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="WS5Q8MW866zOU2z6" style="transform:scale(1, 1);">
                  <path id="au1wUm977fFTyTWZ" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="mMDOMCTipLXImerq">
          <div id="PgumqIv5Pst1HzvT" style="padding-top:11.79483627%;transform:rotate(0deg);">
            <div id="IzQoffzW70evJwLl" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="qAAyTHjfWTq1yrLu" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="taGOcZCgr66hOT3V" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="F4P2NScQrkK7DbVv" style="color:#ffffff;">James Clerk Maxwell</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="uvlVseV8NeZBlRda">
          <div id="C8XrNC15W43PvN2c" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="Y4302n7SoFPq9gBY" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="HSfiQWuzC0Ac3KFh" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="vs4EtPHQ2c6YbWOp" style="transform:scale(1, 1);">
                  <path id="ZOwkRFe5nJGjOXWz" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="WzYlPC2G45LQVJO5">
          <div id="Qq89IU43paOnObja" style="padding-top:21.35379275%;transform:rotate(0deg);">
            <div id="qn1dBCspNeQ1Ddst" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="vVdgGxw0V0Y9B8Ce" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="NBPMYxwkz487299G" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="bs1SIFgbsBvIIDTa" style="color:#ffffff;">Marie Curie</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="Ifh5pINvc0pI35v7">
          <div id="pDa3uWwgD3uJIWik" style="padding-top:22.54274511%;transform:rotate(0deg);">
            <div id="W4D87uv1kFN4j1hE" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="KZD0N1HCMAcbn3n0" viewBox="0 0 141.9525 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="fc8YbvJlFaqrqk9r" style="transform:scale(1, 1);">
                  <path id="wQXvyggUBM35pkH2" d="M125.95254327101898,0.0 C134.789098751976,0.0 141.95254327101898,7.1634440422058105 141.95254327101898,16.0 C141.95254327101898,24.83655548095703 134.789098751976,32.0 125.95254327101898,32.0 L16.0,32.0 C7.1634440422058105,32.0 0.0,24.83655548095703 0.0,16.0 C0.0,7.1634440422058105 7.1634440422058105,0.0 16.0,0.0 L125.95254327101898,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="X6LwAjFhJkPRAfy3">
          <div id="ZGUS7B48vSBOZIGC" style="padding-top:42.72127411%;transform:rotate(0deg);">
            <div id="WaBmZVzggQd87NZy" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="bnYMTARmpN4YeD7Y" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="ruc5qXR8YOoQYbeH" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="EE8lxK0seHGMr7bH" style="color:#ffffff;">Reset</span><br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="m3UrG3GMaUDdV988" style="z-index:0;overflow:hidden;display:grid;margin-top:-1px;position:relative;align-items:center;">
      <div id="k4wNSeguQ1RTB7Du" style="background-color:#ffbde7;transform:scale(1, 1);overflow:hidden;width:100%;opacity:1.0;height:100%;top:0%;left:0%;position:absolute;">
        <div id="BbFEqCjQxP4xayUW" style="background-repeat:no-repeat;background-size:cover;top:-38.93229167%;left:0%;width:100%;background-image:url(images/f8a4dbcf8d996f54871b9cf7d31b60a9.png);background-position:center;position:relative;opacity:0.99;height:177.86458333%;">
        </div>
      </div>
      <div id="PiBxmHaXX16Z2jZ6">
        <div id="lH4IHDSV74euIRVa">
          <div id="k0LiDXhFizv3U94B" style="padding-top:100%;transform:rotate(0deg);">
            <div id="l3yiUDX2MR4Q4uvB" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="BJU0BIwva0Maq5WA" style="width:100%;opacity:1.0;height:100%;">
                <div id="r8oYR8j5T4CvwfVm" style="transform:scale(1, 1);overflow:hidden;width:100%;height:100%;">
                  <div id="QMyLWmJCmb2uBJte" style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:relative;opacity:1.0;height:100%;animation:anim-pulse 1.5s ease-in-out infinite;">
                    <img src="images/16de01ee78d1ac5fc01a7edf7489d1dc.svg" alt="Number 2 Icon" loading="lazy" style="width:100%;height:100%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="hyWEqUN2NwInev3Q">
          <div id="iLmso56NCHH2BipE" style="padding-top:56.25%;transform:rotate(0deg);">
            <div id="Bbfpl5wbS61yjnEb" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="eFVjWsn7CgonSKpw" style="width:100%;opacity:1.0;height:100%;">
                <div id="cSSVkjFhCtEcmILL" style="transform:scale(1, 1);overflow:hidden;width:100%;height:100%;">
                  <div id="tq4zIY1lF5cVVZKC" style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:relative;opacity:1.0;height:100%;">
                    <video src="videos/a81fba85e66cf3dd0c4fdf1f0616eb91.mp4" playsinline="" preload="metadata" oncanplay="this.volume=0.0" autoplay="" muted="" loop="" style="object-fit:cover;width:100%;height:100%;">
                    </video>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="qZDHRUYbGkiqNrw2">
          <div id="sz3qLLBkFpkvIOjR" style="padding-top:18.31478433%;transform:rotate(0deg);">
            <div id="rLPxoxvNduIlEZke" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="BoZrZWCQMxDaeLf8" viewBox="0 0 265.3403 48.5965" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="lovuLgh5RHqkBYps" style="transform:scale(1, 1);">
                  <path id="z9kJHYdTXe5Qf9sw" d="M10.00000063,0.0 L255.34027036,0.0 C257.99243543,0.0 260.53597472,1.05356847 262.41133862,2.92893237 264.28670253,4.80429627 265.34027100000003,7.34783556 265.34027100000003,10.00000063 L265.34027100000003,38.59649976 C265.34027100000003,41.24866483 264.28670253,43.79220412 262.41133862,45.66756803 260.53597472,47.54293193 257.99243543,48.596500400000004 255.34027036,48.596500400000004 L10.00000063,48.596500400000004 C7.34783557,48.596500400000004 4.80429628,47.54293193 2.92893237,45.667568020000004 1.05356847,43.79220412 0.0,41.24866483 0.0,38.59649976 L0.0,10.00000063 C0.0,7.34783557 1.05356847,4.80429628 2.92893237,2.92893237 4.80429627,1.05356847 7.34783556,0.0 10.00000063,0.0 Z" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="p99CKlbcHjZZ8YFl">
          <div id="MoKyUgHMbuA1CUua" style="padding-top:16.45045526%;transform:rotate(0deg);">
            <div id="FKwwsgq1bzWKD21F" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="elwdRcAlpyB3ktR8" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="rdWVeCbcJvdeJm9E" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="cssSJOBemh1bUMKL" style="color:#ffffff;">Corolla, filament and stigma are </span></p>
                <p id="d2fOyoYfXqAqIpcy" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="Mo4HkXgCLxEwt88B" style="color:#ffffff;">parts of a what?</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="IqbtLnMSp4ok86AM">
          <div id="xUS2kwDfzAClgifq" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="nUxpeRBtnYsKOQxS" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="vdnORDWl916Ud8Fu" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="keSwTTLJZtkSGreh" style="transform:scale(1, 1);">
                  <path id="pHduCiSG31BMrHNF" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="DDZwrQi25pfuIJag">
          <div id="hOhawXqrQrpXWD0W" style="padding-top:128.45539087%;transform:rotate(0deg);">
            <div id="bWVLtze7KhLSZ7wS" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="gW5A7L3tXKUdG1TN" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="AqX4CN81LCOwjCA9" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="OpgDatj6JDAQ4pyl" style="color:#ffffff;">Star</span></p>
                <p id="V4aguqTeeAg5bLPJ" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="Ot2hYpNYiNBDWpU6">
          <div id="eY3r4VBdMiwlKqUH" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="DCi9aB6xiFpauSdq" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="ljHFpxW2gVWYxSrB" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="V0ZpxRGFwiebLjgj" style="transform:scale(1, 1);">
                  <path id="tEAKZkOQ9n6RML0b" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="fCPa4Ew1BBcc4kxJ">
          <div id="WMLDrqMBdbM7dqnP" style="padding-top:80.98399365%;transform:rotate(0deg);">
            <div id="PqEjnS8ByFPOzmZ5" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="UKWomvquFERpNHsD" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="Oz36No8flF4mFanz" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="NMrR8OsczfOXVpvD" style="color:#ffffff;">Spider</span></p>
                <p id="bwKqoiQQKfbDQzNk" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="LJ3uI1itufGvmaq5">
          <div id="xfkE9njVi7oSCyDC" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="JJtxee90uR2LxwK7" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="WAptW7QAdjfG04Yg" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="V8oeZQcc45bVplkU" style="transform:scale(1, 1);">
                  <path id="hiwxzqtlQwkX4F0b" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="UxEJYzZFHy8DQCde">
          <div id="KNAnyh0IKA2KUjgE" style="padding-top:52.89518137%;transform:rotate(0deg);">
            <div id="Dlrk2IGS7wuvKljN" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="fk253EBsT6JV6NiI" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="PeOm0uFHUWw3wjpl" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="ML4ajJunWktsxBfK" style="color:#ffffff;">Microchip</span></p>
                <p id="U6CXVfC0ScTlWBV7" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="CXjN7EW21NItcukw">
          <div id="M1t8ggtpEi5wtVAY" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="Wjxhd6jFUwcKBkFI" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="VBNKNLtM2cBwV68U" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="pbBlbhJyRJ3UlMFR" style="transform:scale(1, 1);">
                  <path id="q6TVlRyu3uF7me1S" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="asR7Cth58A0cDOXG">
          <div id="U6WAnzjYeipHQeUG" style="padding-top:78.79759799%;transform:rotate(0deg);">
            <div id="D6AOAS2SEfIEBtNf" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="JQFaEfNLQU2FabRd" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="sS58JkhWTphZI1h1" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="XwuJr582tmwgqK77" style="color:#ffffff;">Flower</span></p>
                <p id="cIkN5H8pkP2CEbB7" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="i9EbiEFtH56Fbxf2">
          <div id="i39PDyBLA0bt6X1R" style="padding-top:22.54274511%;transform:rotate(0deg);">
            <div id="LpbkrbCVhYlzHxfM" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="GuB45yBdUULYuZGM" viewBox="0 0 141.9525 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="Kbm7nO6FB58rfDra" style="transform:scale(1, 1);">
                  <path id="wQEI2AHaZJwDbbwo" d="M125.95254327101898,0.0 C134.789098751976,0.0 141.95254327101898,7.1634440422058105 141.95254327101898,16.0 C141.95254327101898,24.83655548095703 134.789098751976,32.0 125.95254327101898,32.0 L16.0,32.0 C7.1634440422058105,32.0 0.0,24.83655548095703 0.0,16.0 C0.0,7.1634440422058105 7.1634440422058105,0.0 16.0,0.0 L125.95254327101898,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="Z4hDMkxz0TjEE0cU">
          <div id="ZsJs7cD6KRaqgyQ6" style="padding-top:42.72127411%;transform:rotate(0deg);">
            <div id="IkbL1SZza0dZPLGs" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="KZ7p2NAzBCFOkU4M" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="ivM7aBmQESxcdgqi" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="KoxzAEl1Lr8s7HJu" style="color:#ffffff;">Reset</span><br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="jzr1Z9zsGcjdpXPF" style="z-index:0;overflow:hidden;display:grid;margin-top:-1px;position:relative;align-items:center;">
      <div id="io5GgLd24xJNCsWe" style="background-color:#ffbde7;transform:scale(1, 1);overflow:hidden;width:100%;opacity:1.0;height:100%;top:0%;left:0%;position:absolute;">
        <div id="D0hLNs3Px18RXvEy" style="background-repeat:no-repeat;background-size:cover;top:-38.93229167%;left:0%;width:100%;background-image:url(images/f8a4dbcf8d996f54871b9cf7d31b60a9.png);background-position:center;position:relative;opacity:0.99;height:177.86458333%;">
        </div>
      </div>
      <div id="HzGAVQiNEBa4ktvO">
        <div id="GbVROlm4HFYu52VX">
          <div id="OyJwTpTDy0p0EiZc" style="padding-top:13.8678772%;transform:rotate(0deg);">
            <div id="LdIqlcJ6KRf09tzo" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="wSXUCmoJ5jxtZcv5" style="flex-direction:column;display:flex;width:100%;justify-content:center;opacity:1.0;height:100%;">
                <p id="QTlLv8rvwHckUs6c" style="color:#212221;letter-spacing:-0.06em;font-family:YAD1aU3sLnI-0;line-height:1.4em;text-align:center;"><span id="fb4dr6vWPfyqWwXT" style="color:#212221;">Results</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="FXX5rwCYVysj15j9">
          <div id="gJMBnSCpnZQeE1Lq" style="padding-top:18.31478433%;transform:rotate(0deg);">
            <div id="cHsj74CFbX6z61Lc" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="N43NtTVl8F7Fep4b" viewBox="0 0 265.3403 48.5965" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="Hs68skSbAv5B9xKD" style="transform:scale(1, 1);">
                  <path id="tRRsN2ErIq3tZKvm" d="M20.75932647,0.0 L244.58094453,0.0 C250.08666023,0.0 255.36687614000002,2.18713704 259.26000505,6.08026595 263.15313395,9.97339486 265.34027100000003,15.25361077 265.34027100000003,20.75932647 L265.34027100000003,27.837173930000002 C265.34027100000003,39.30223335 256.04600395,48.596500400000004 244.58094453,48.596500400000004 L20.75932647,48.596500400000004 C9.29426704,48.59650039 0.0,39.30223335 0.0,27.837173930000002 L0.0,20.75932647 C0.0,9.29426704 9.29426705,0.0 20.75932647,0.0 Z" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="dbdfc8vEySn2VsCu">
          <div id="AG8jTWcMNB9GqR4x" style="padding-top:25.89629202%;transform:rotate(0deg);">
            <div id="irbFGqnr3Q4ZO0rA" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="ujB5cv40jupth9Rh" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="BFdatWBwhtuMaplh" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="WKnB3nQ15zA6t32b" style="color:#ffffff;">Who devised the periodic table </span></p>
                <p id="cmjldq8xYGkMbhWJ" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="HIoiIAOpeMLoY3am" style="color:#ffffff;">of elements?</span></p>
                <p id="EWN4sxhWiCM3Wz2k" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="htHSmgOmzfF2DEaw">
          <div id="ffOsXBvSspbWh4AA" style="padding-top:18.31478433%;transform:rotate(0deg);">
            <div id="JmaXqcrl9tis6esz" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="EtBxzQTkXS0LuKEr" viewBox="0 0 265.3403 48.5965" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="XOZBAejPqnOlpdyK" style="transform:scale(1, 1);">
                  <path id="ZV5ufZoO9vXwsFqF" d="M20.75932647,0.0 L244.58094453,0.0 C250.08666023,0.0 255.36687614000002,2.18713704 259.26000505,6.08026595 263.15313395,9.97339486 265.34027100000003,15.25361077 265.34027100000003,20.75932647 L265.34027100000003,27.837173930000002 C265.34027100000003,39.30223335 256.04600395,48.596500400000004 244.58094453,48.596500400000004 L20.75932647,48.596500400000004 C9.29426704,48.59650039 0.0,39.30223335 0.0,27.837173930000002 L0.0,20.75932647 C0.0,9.29426704 9.29426705,0.0 20.75932647,0.0 Z" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="nLi3cLPH0a95A32a">
          <div id="BK6imlNyGvElGkI8" style="padding-top:25.31760545%;transform:rotate(0deg);">
            <div id="lPd3RDq6W2BidV8j" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="Rjzt9wL4Vpnbmz06" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="lVEjwFyF7SAr73bL" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="ZxFFxGhAqc2DRuq5" style="color:#ffffff;">Corolla, filament and stigma are</span><span id="qE8b8Ns8iYCVwmmE" style="color:#ffffff;"> </span><br></p>
                <p id="OVfCHtRbvoqvzUsE" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="nLuCthN4Az8Vrzvf" style="color:#ffffff;">parts of a what?</span><br></p>
                <p id="S1T2rvtgxaQMrTUL" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="shb3JLQp6V7KxByb">
          <div id="w5imXYdDBIS2tvFb" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="CpoQh6MMLLOhvpFM" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="m13d5GvtMCd102bB" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="AAxFpb5OiP7306Hu" style="transform:scale(1, 1);">
                  <path id="hPgkMdwv0CI8o24q" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="EMWlpUInw55na29m">
          <div id="rw6rMx7IdFUXQr2r" style="padding-top:13.72187617%;transform:rotate(0deg);">
            <div id="PLWATINEEVGUTsp4" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="dVTeARHT70z4xbsO" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="ITwhsI0sqpvHKyvM" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="nKrG3txDkztWcFF2" style="color:#ffffff;">Dmitri Mendeleev</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="m1Urt3jOQzckfo0v">
          <div id="yvuEN8scpLQ8fk42" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="RCjaxDHzalG5JeGk" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="lvz69fA0er5IYRfv" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="sdsNurPs4n1WZIDu" style="transform:scale(1, 1);">
                  <path id="jAL9QJbeSG8vT8m0" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="GGPavKmdOJc3O5H6">
          <div id="bgKVElJnybdlwomR" style="padding-top:36.32399316%;transform:rotate(0deg);">
            <div id="RzcPOqsIdwdSbMfs" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="lbdHIKdqqgEodOdJ" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="doTE8gg5qYztyIRi" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="UHofwXWf1g9m8g01" style="color:#ffffff;">Flower</span><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="hr09P7NIBQc4QlaU">
          <div id="NvO2IVyfmNo60jRS" style="padding-top:18.31478433%;transform:rotate(0deg);">
            <div id="jgBdoIkfkJT3zfqQ" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="oVIbRwNzdJ7obdwp" viewBox="0 0 265.3403 48.5965" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="W4vTIsRSVo1gp3fe" style="transform:scale(1, 1);">
                  <path id="rcyfWPWphX8Rfux0" d="M20.75932647,0.0 L244.58094453,0.0 C250.08666023,0.0 255.36687614000002,2.18713704 259.26000505,6.08026595 263.15313395,9.97339486 265.34027100000003,15.25361077 265.34027100000003,20.75932647 L265.34027100000003,27.837173930000002 C265.34027100000003,39.30223335 256.04600395,48.596500400000004 244.58094453,48.596500400000004 L20.75932647,48.596500400000004 C9.29426704,48.59650039 0.0,39.30223335 0.0,27.837173930000002 L0.0,20.75932647 C0.0,9.29426704 9.29426705,0.0 20.75932647,0.0 Z" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="yWgmXJz3GeMOylFy">
          <div id="MrB5jD7nJy5uIo4W" style="padding-top:26.49943118%;transform:rotate(0deg);">
            <div id="lR6ygYXH2RkiHjuz" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="ReDmKCYEDNgbdYBD" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="tQITjEmw7npTUzY9" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="icur83Kp3cOcZFgZ" style="color:#ffffff;">What is the word for a group of</span></p>
                <p id="Prt5EadYpLnY4120" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="HOikJKolIiWWKlno" style="color:#ffffff;"> antelopes?</span></p>
                <p id="oCXJWVKEe0b2PaLM" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="tYBdbQXqUVWSkzwQ">
          <div id="NoqMbi2cbKivnQhf" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="aJh2mqXnxqHpN4yN" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="vdKV28rLF7COhBVd" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="J6GrGV4D4SwaKaBC" style="transform:scale(1, 1);">
                  <path id="AGuCbHrO9ytco4DQ" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="TYShiNLIIgzrSXra">
          <div id="BvAe61nT4KsU1qWS" style="padding-top:80.86287401%;transform:rotate(0deg);">
            <div id="je2oaM6ptdi6zEup" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="rl6BFzGlLFrghHrC" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="IKULiGP4sGoPVU3G" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="pybOqLpP9M01T3Bw" style="color:#ffffff;">A herd</span></p>
                <p id="lglgR4EqSQAZJPr6" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="lKSGX42EuYKUjaLd">
          <div id="BbjD7q6524l2GcWp" style="padding-top:18.31478433%;transform:rotate(0deg);">
            <div id="vgvJlzxJifFaqyFd" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="eAnRygifjudZMU2i" viewBox="0 0 265.3403 48.5965" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="u05lHfJD1TYJCgLe" style="transform:scale(1, 1);">
                  <path id="mJqzpoOyxayqSc75" d="M20.75932647,0.0 L244.58094453,0.0 C250.08666023,0.0 255.36687614000002,2.18713704 259.26000505,6.08026595 263.15313395,9.97339486 265.34027100000003,15.25361077 265.34027100000003,20.75932647 L265.34027100000003,27.837173930000002 C265.34027100000003,39.30223335 256.04600395,48.596500400000004 244.58094453,48.596500400000004 L20.75932647,48.596500400000004 C9.29426704,48.59650039 0.0,39.30223335 0.0,27.837173930000002 L0.0,20.75932647 C0.0,9.29426704 9.29426705,0.0 20.75932647,0.0 Z" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="uUZAGEhDoVa04aDR">
          <div id="xNIcYmb1FWFluYEu" style="padding-top:16.78825382%;transform:rotate(0deg);">
            <div id="FCnZssJft0WC8QCa" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="L47FCeYRyGW7atgV" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="YM1p7iytthExKnZ6" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="uAD3lvMZtZM5pz8O" style="color:#ffffff;">What is Ethnology the study of?</span></p>
                <p id="glUGU9Wv5kqE5WCz" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="zyoAs32EolD7yQDs">
          <div id="qEBWW2z8JRJdaels" style="padding-top:31.27806871%;transform:rotate(0deg);">
            <div id="V4drpaIKf4RU8LDP" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="v8L90o57NjoRdGlJ" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="Qx769mh1LinOjive" style="transform:scale(1, 1);">
                  <path id="iyTlOVHamGILVAHN" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="UvZa1vwxHmXhuDeY">
          <div id="mF6b2vGBerUTDv3h" style="padding-top:121.89175797%;transform:rotate(0deg);">
            <div id="E10HR70L6cODEQC0" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="FAPi6nEN6bST7rSb" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="QC5hUZe3yMPSmzEP" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="QFUFFA5bo4a2ctyt" style="color:#ffffff;">race</span></p>
                <p id="ZnIbAgFXueuioH92" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><br></p>
              </div>
            </div>
          </div>
        </div>
        <div id="PY67EOTFKWo4HqBC">
          <div id="bRMfoo502xTif7NI" style="padding-top:18.31478433%;transform:rotate(0deg);">
            <div id="qXgZ7HwteA8ZPNJc" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <svg id="iOzThHV22qHr47aT" viewBox="0 0 265.3403 48.5965" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                <g id="yudVC7lrCwTPtBhD" style="transform:scale(1, 1);">
                  <path id="GoJPmmSGF32B1qJn" d="M20.75932647,0.0 L244.58094453,0.0 C250.08666023,0.0 255.36687614000002,2.18713704 259.26000505,6.08026595 263.15313395,9.97339486 265.34027100000003,15.25361077 265.34027100000003,20.75932647 L265.34027100000003,27.837173930000002 C265.34027100000003,39.30223335 256.04600395,48.596500400000004 244.58094453,48.596500400000004 L20.75932647,48.596500400000004 C9.29426704,48.59650039 0.0,39.30223335 0.0,27.837173930000002 L0.0,20.75932647 C0.0,9.29426704 9.29426705,0.0 20.75932647,0.0 Z" style="fill:#38729d;opacity:1.0;">
                  </path>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div id="cPjxN8x7DnsH5cpl">
          <div id="c96cQ9P7iVIeCjxM" style="padding-top:34.04134662%;transform:rotate(0deg);">
            <div id="k9dMzz7LHVySIPTe" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
              <div id="oUc2iKXCznZM13LW" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                <p id="FGBfVUZLcHXHf5Qv" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="RADNsJ5kwiBYwjPH" style="color:#ffffff;font-weight:700;">Winner</span><br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <script src="js/a74a5d0e57e50b8de5694baf93dafd5c30aaee19ff45d4cf8f40cd016a48f278.js" async="" nonce="6dc399fe-b036-4ff6-a19f-7b4780e1ab90">
  </script>
  <script src="js/73ad2651535b7ecadd366d5fa045dc32c1cdb8fc38f8243601b62b64f4123420.js" async="" nonce="6dc399fe-b036-4ff6-a19f-7b4780e1ab90">
  </script>
</div>
<script nonce="6dc399fe-b036-4ff6-a19f-7b4780e1ab90">
  const lang = navigator.language ? navigator.language : 'en';
  const loaded = new Promise((resolve) => { 
    if (document.readyState === 'loading') {
      window.addEventListener('DOMContentLoaded', resolve);
      return;
    }
    resolve();
  })
  Promise.all([fetch('_footer?lang=' + encodeURIComponent(lang)), loaded]).then(([response]) => {
    if (response.status !== 200) {
      return;
    }
    response.text().then(footerStr => {
      const div = document.createElement('div');
      div.innerHTML = footerStr;
      for (const child of [...div.children]) {
        if (child.tagName.toLowerCase() !== 'script') {
          document.body.append(child);
        }
      }

      (() => { !function(e){"use strict";const t=document.getElementById("modal_backdrop"),n=document.getElementById("modal"),o=document.getElementById("captcha-form"),c=document.getElementById("report_button"),d=document.getElementById("form_report"),s=document.getElementById("form_cancel"),l=document.getElementById("form_submit_reason"),a=document.getElementById("form_go_back"),r=document.getElementById("form_submit_captcha"),m=document.getElementById("form_close"),i=document.getElementById("form_close_initial"),u=document.getElementById("report_reason_0"),p=document.getElementById("error_message"),_=document.getElementById("error_message_captcha"),y=new Map;y.set(0,document.getElementById("form_step_terms")),y.set(1,document.getElementById("form_step_report_reason")),y.set(4,document.getElementById("form_step_report_other"));const E=document.getElementById("form_step_report_ip");E&&y.set(5,E),y.set(2,document.getElementById("form_step_captcha")),y.set(3,document.getElementById("form_step_success"));const f=document.getElementById("report_reason_4"),g=document.getElementById("form_close_ip"),h=document.getElementById("form_go_back_ip"),I=document.getElementById("report_reason_other"),k=document.getElementById("form_close_other"),w=document.getElementById("form_go_back_other");function v(){t.classList.remove("active"),n.classList.remove("active"),c.classList.remove("active"),c.focus()}function B(e){y.forEach(((t,n)=>{n===e?(t.style.display="block",L(t)):t.style.display="none"}))}let b,C=!1;const T="NETEASE"===window.C_CAPTCHA_IMPLEMENTATION?()=>b:()=>{const e=o.elements.namedItem("g-recaptcha-response");return null==e?void 0:e.value};t.onclick=v,s.onclick=v,m.onclick=v,i.onclick=v,g&&(g.onclick=v),k.onclick=v,c.onclick=function(){y.forEach(((e,t)=>{e.style.display=0===t?"block":"none"})),t.classList.add("active"),n.classList.add("active"),c.classList.add("active"),u.checked=!0,setTimeout((()=>{L(y.get(0))}),350)},d.onclick=d.dataset.reportUrl?function(){const{origin:e,pathname:t}=window.location,n=e+t,o=d.dataset.reportUrl+encodeURIComponent(n);window.open(o)}:()=>B(1),l.onclick=()=>{null!=E&&f.checked?B(5):I.checked?B(4):(B(2),function(){if(C)return;const e=document.createElement("script");e.src="NETEASE"===window.C_CAPTCHA_IMPLEMENTATION?"https://cstaticdun.126.net/load.min.js":"https://www.google.com/recaptcha/api.js",e.async=!0,e.defer=!0,document.head.appendChild(e),C=!0,e.onload="NETEASE"===window.C_CAPTCHA_IMPLEMENTATION?()=>{var e;null===(e=window.initNECaptcha)||void 0===e||e.call(window,{captchaId:window.C_CAPTCHA_KEY,element:"#netease-captcha",protocol:"https",width:"auto",onVerify:(e,t)=>{b=t.validate}})}:()=>{}}())},a.onclick=()=>B(1),h&&(h.onclick=()=>B(1)),w.onclick=()=>B(1),o.addEventListener("submit",(function(e){e.preventDefault(),p.style.display="none",_.style.display="none";const t=function(){let e="";const t=document.getElementsByName("report_reason");for(let n=0;n<t.length;n++){const o=t[n];o.checked&&(e=o.value)}return e}(),n=T();if(!n)return void(_.style.display="block");const o={reason:t,challenge:n},c=window.location.origin+window.location.pathname+"/_api/report";r.classList.add("loading"),fetch(c,{method:"POST",body:JSON.stringify(o),headers:{"Content-Type":"application/json; charset=utf-8"}}).then((e=>{r.classList.remove("loading"),e.ok?B(3):p.style.display="block"}))}));const A=new Map,L=e=>{const t=A.get(e);null!=t&&document.removeEventListener("keydown",t);const n=e.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'),o=e,c=n[n.length-1],d=function(e){("Tab"===e.key||9===e.keyCode)&&(e.shiftKey?document.activeElement===o&&(c.focus(),e.preventDefault()):document.activeElement===c&&(o.focus(),e.preventDefault()))};A.set(e,d),document.addEventListener("keydown",d),o.focus()};e.keepFocus=L,Object.defineProperty(e,"__esModule",{value:!0})}({}); })();
      window.dispatchEvent(new Event('resize'));
    });
  });
</script>
              
           
        </div>       
    </div>
    

@endsection
