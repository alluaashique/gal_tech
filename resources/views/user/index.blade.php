 {{-- @extends('layouts.app')
@section('content')
    <div class="row">

       @foreach ($data as $category => $keywords)
            @php
                \Log::info($keywords);

                $slug = str_replace('&', 'and', $category);
                $slug = \Illuminate\Support\Str::slug($slug);
                $slug = str_replace('-', '_', $slug);
            @endphp

            <div class="col-sm-4">
                <div class="card">
                    <div class="header">
                        <div class="actions">


                            <a href="{{ route('quiz.create', $slug) }}" target="_blank">
                                <button type="button" class="history">{{ $category }} </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach --}}



        {{-- {{ $data->links('layouts.pagination') }} --}}
        {{-- {{ $data->links() }} --}}

        {{-- <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul> --}}



        {{--        
    </div>    
@endsection
--}}


@extends('layouts.app')
@section('content')
    <div class="roww">        
        <div class="col-sm-12"> 
        <div id="root">
            <section id="uxYUVS9ZJ7zYPj2R"
                style="z-index:0;overflow:hidden;display:grid;margin-top:-1px;position:relative;align-items:center;">
                <div id="dEboic3WeqPBxC5h"
                    style="background-color:#ffbde7;transform:scale(1, 1);overflow:hidden;width:100%;opacity:1.0;height:100%;top:0%;left:0%;position:absolute;">
                    <div id="IU3bSoQ2JjUU0C94"
                        style="background-repeat:no-repeat;background-size:cover;top:-38.93229167%;left:0%;width:100%;background-image:url(images/f8a4dbcf8d996f54871b9cf7d31b60a9.png);background-position:center;position:relative;opacity:0.99;height:177.86458333%;">
                    </div>
                </div>
                <div id="l8vLGqwePF86eesO">
                    <div id="ZJjmPrST3TAWp656">
                        <div id="ypexZVhThaFxvCow" style="padding-top:30.06472448%;transform:rotate(0deg);">
                            <div id="JSTGQfV1e5zfCNEX" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                                <div id="BY6OnEzDQuNF8vuo"
                                    style="flex-direction:column;display:flex;width:100%;justify-content:center;opacity:1.0;height:100%;">
                                    <p id="qOQekeboZifAfO6G"
                                        style="color:#212221;letter-spacing:-0.06em;font-family:YAD1aU3sLnI-0;line-height:1.4em;text-align:center;">
                                        <span id="fslkI6x3pBnH1UDa" style="color:#212221;">Online Quiz </span></p>
                                    <p id="Xchk6qVlHagkGbVl"
                                        style="color:#212221;letter-spacing:-0.06em;font-family:YAD1aU3sLnI-0;line-height:1.4em;text-align:center;">
                                        <span id="QldOHN9bQTbGV82Z" style="color:#212221;">Select Quiz Type</span><br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
                    <div class="row"  id="Iy4bfU1qDOcc0lCn">                      
                      @foreach ($data as $category => $keywords)
                        @php
                            \Log::info($keywords);
            
                            $slug = str_replace('&', 'and', $category);
                            $slug = \Illuminate\Support\Str::slug($slug);
                            $slug = str_replace('-', '_', $slug);
                        @endphp        
                        <div class="col-sm-4">
                          <div id="Iy4bfU1qDOcc0lCnn" style="padding-top:12.68807249%;">
                            <div id="feXdVadKTXW429gin" style="padding-top:22.54274511%;transform:rotate(0deg);">
                                <div id="bsYL4lvNGIVAUOaV" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                                    <svg id="TMbxUwG7yggaAAGN" viewBox="0 0 141.9525 32.0" preserveAspectRatio="none"
                                        style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%;">
                                        <g id="AgmqmzutUNn0CbWm" style="transform:scale(1, 1);">
                                            <path id="BTII0NIo61miRGEa"
                                                d="M125.95254327101898,0.0 C134.789098751976,0.0 141.95254327101898,7.1634440422058105 141.95254327101898,16.0 C141.95254327101898,24.83655548095703 134.789098751976,32.0 125.95254327101898,32.0 L16.0,32.0 C7.1634440422058105,32.0 0.0,24.83655548095703 0.0,16.0 C0.0,7.1634440422058105 7.1634440422058105,0.0 16.0,0.0 L125.95254327101898,0.0"
                                                style="fill:#38729d;opacity:1.0;">


                                               
                                            </path>
                                        </g>
                                    </svg>



                                    <div id="qkFJnF5ZHFeM5chX">
                                      <div id="YNWk7j3m2v3T47fc" style="padding-top:32.2333921%;transform:rotate(0deg);">
                                          <div id="e7kG95cie75Y0Ka5" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                                              <div id="n9tGPyGGFxYtd5Fd"
                                                  style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                                                  <p id="NQir092ZlneaepQP"
                                                      style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;">
                                                      <span id="iLYrcj2mSOZqa8Ks" style="color:#ffffff;">
                                                        <a href="{{ route('quiz.create', $slug) }}" target="_blank">
                                                          {{ $category }}
                                                        </a>
                                                      </span></p>
                                                  <p id="pI5vLD1WbI7T2Txw"
                                                      style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;">
                                                      <br></p>
                                              </div>
                                          </div>
                                      </div>
                                    </div>


                                </div>
                            </div>
                          </div>
                          
                        </div>
                      @endforeach
                    </div>

                    <div id="jc6koWVS2WdkBYhl">
                        <div id="v4CnDwPjvsEHBax3" style="padding-top:20.5%;transform:rotate(0deg);">
                          <div id="uqaMh7fM3BTuC7js" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                            <div id="fIfWEheJObrILEnt" style="width:100%;opacity:1.0;height:100%;">
                              <div id="jN9Ga0ylfd37Ykxa" style="transform:scale(1, 1);overflow:hidden;width:100%;height:100%;">
                                <div id="se5GecCYNuHoLxIQ" style="transform:rotate(0deg);top:0%;left:0%;width:100%;position:relative;opacity:1.0;height:100%;animation:anim-pulse 1.5s ease-in-out infinite;">
                                    {{ $data->links('layouts.pagination') }}
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

            </section>
        </div>


    </div>
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

                (() => {
                    ! function(e) {
                        "use strict";
                        const t = document.getElementById("modal_backdrop"),
                            n = document.getElementById("modal"),
                            o = document.getElementById("captcha-form"),
                            c = document.getElementById("report_button"),
                            d = document.getElementById("form_report"),
                            s = document.getElementById("form_cancel"),
                            l = document.getElementById("form_submit_reason"),
                            a = document.getElementById("form_go_back"),
                            r = document.getElementById("form_submit_captcha"),
                            m = document.getElementById("form_close"),
                            i = document.getElementById("form_close_initial"),
                            u = document.getElementById("report_reason_0"),
                            p = document.getElementById("error_message"),
                            _ = document.getElementById("error_message_captcha"),
                            y = new Map;
                        y.set(0, document.getElementById("form_step_terms")), y.set(1, document
                            .getElementById("form_step_report_reason")), y.set(4, document
                            .getElementById("form_step_report_other"));
                        const E = document.getElementById("form_step_report_ip");
                        E && y.set(5, E), y.set(2, document.getElementById("form_step_captcha")), y.set(
                            3, document.getElementById("form_step_success"));
                        const f = document.getElementById("report_reason_4"),
                            g = document.getElementById("form_close_ip"),
                            h = document.getElementById("form_go_back_ip"),
                            I = document.getElementById("report_reason_other"),
                            k = document.getElementById("form_close_other"),
                            w = document.getElementById("form_go_back_other");

                        function v() {
                            t.classList.remove("active"), n.classList.remove("active"), c.classList
                                .remove("active"), c.focus()
                        }

                        function B(e) {
                            y.forEach(((t, n) => {
                                n === e ? (t.style.display = "block", L(t)) : t.style
                                    .display = "none"
                            }))
                        }
                        let b, C = !1;
                        const T = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ? () => b : () => {
                            const e = o.elements.namedItem("g-recaptcha-response");
                            return null == e ? void 0 : e.value
                        };
                        t.onclick = v, s.onclick = v, m.onclick = v, i.onclick = v, g && (g.onclick =
                            v), k.onclick = v, c.onclick = function() {
                                y.forEach(((e, t) => {
                                        e.style.display = 0 === t ? "block" : "none"
                                    })), t.classList.add("active"), n.classList.add("active"), c
                                    .classList.add("active"), u.checked = !0, setTimeout((() => {
                                        L(y.get(0))
                                    }), 350)
                            }, d.onclick = d.dataset.reportUrl ? function() {
                                const {
                                    origin: e,
                                    pathname: t
                                } = window.location, n = e + t, o = d.dataset.reportUrl +
                                    encodeURIComponent(n);
                                window.open(o)
                            } : () => B(1), l.onclick = () => {
                                null != E && f.checked ? B(5) : I.checked ? B(4) : (B(2), function() {
                                    if (C) return;
                                    const e = document.createElement("script");
                                    e.src = "NETEASE" === window.C_CAPTCHA_IMPLEMENTATION ?
                                        "https://cstaticdun.126.net/load.min.js" :
                                        "https://www.google.com/recaptcha/api.js", e.async = !0,
                                        e.defer = !0, document.head.appendChild(e), C = !0, e
                                        .onload = "NETEASE" === window
                                        .C_CAPTCHA_IMPLEMENTATION ? () => {
                                            var e;
                                            null === (e = window.initNECaptcha) || void 0 ===
                                                e || e.call(window, {
                                                    captchaId: window.C_CAPTCHA_KEY,
                                                    element: "#netease-captcha",
                                                    protocol: "https",
                                                    width: "auto",
                                                    onVerify: (e, t) => {
                                                        b = t.validate
                                                    }
                                                })
                                        } : () => {}
                                }())
                            }, a.onclick = () => B(1), h && (h.onclick = () => B(1)), w.onclick = () =>
                            B(1), o.addEventListener("submit", (function(e) {
                                e.preventDefault(), p.style.display = "none", _.style.display =
                                    "none";
                                const t = function() {
                                        let e = "";
                                        const t = document.getElementsByName("report_reason");
                                        for (let n = 0; n < t.length; n++) {
                                            const o = t[n];
                                            o.checked && (e = o.value)
                                        }
                                        return e
                                    }(),
                                    n = T();
                                if (!n) return void(_.style.display = "block");
                                const o = {
                                        reason: t,
                                        challenge: n
                                    },
                                    c = window.location.origin + window.location.pathname +
                                    "/_api/report";
                                r.classList.add("loading"), fetch(c, {
                                    method: "POST",
                                    body: JSON.stringify(o),
                                    headers: {
                                        "Content-Type": "application/json; charset=utf-8"
                                    }
                                }).then((e => {
                                    r.classList.remove("loading"), e.ok ? B(3) : p
                                        .style.display = "block"
                                }))
                            }));
                        const A = new Map,
                            L = e => {
                                const t = A.get(e);
                                null != t && document.removeEventListener("keydown", t);
                                const n = e.querySelectorAll(
                                        'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
                                        ),
                                    o = e,
                                    c = n[n.length - 1],
                                    d = function(e) {
                                        ("Tab" === e.key || 9 === e.keyCode) && (e.shiftKey ? document
                                            .activeElement === o && (c.focus(), e.preventDefault()) :
                                            document.activeElement === c && (o.focus(), e
                                                .preventDefault()))
                                    };
                                A.set(e, d), document.addEventListener("keydown", d), o.focus()
                            };
                        e.keepFocus = L, Object.defineProperty(e, "__esModule", {
                            value: !0
                        })
                    }({});
                })();
                window.dispatchEvent(new Event('resize'));
            });
        });
    </script>
@endsection
