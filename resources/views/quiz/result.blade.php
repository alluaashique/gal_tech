@extends('layouts.app')
@section('content')
    <div class="row">        
        <div class="col-sm-12">




<div id="root">
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

      <div class="row" id="FXX5rwCYVysj15j9">
      @foreach($quiz->questions as $question)

        <div class="col-sm-6">
          <div id="FXX5rwCYVysj15j9" style="position: relative;">
            <div id="gJMBnSCpnZQeE1Lq" style="padding-top:18.31478433%;transform:rotate(0deg);">
                <div id="cHsj74CFbX6z61Lc" style="top:0px;left:0px;width:100%;position:absolute;height:100%; display: flex; align-items: center; justify-content: center; color: white; z-index: 2;">
                    <p id="cmjldq8xYGkMbhWJ" style="color:#ffffff;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center; z-index: 10000;"><span id="HIoiIAOpeMLoY3am" style="color:#ffffff;">
                      {{$question->question}}
                    </span></p>
                    <svg id="N43NtTVl8F7Fep4b" viewBox="0 0 265.3403 48.5965" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%; z-index: 1;">
                        <g id="Hs68skSbAv5B9xKD" style="transform:scale(1, 1);">
                            <path id="tRRsN2ErIq3tZKvm" d="M20.75932647,0.0 L244.58094453,0.0 C250.08666023,0.0 255.36687614000002,2.18713704 259.26000505,6.08026595 263.15313395,9.97339486 265.34027100000003,15.25361077 265.34027100000003,20.75932647 L265.34027100000003,27.837173930000002 C265.34027100000003,39.30223335 256.04600395,48.596500400000004 244.58094453,48.596500400000004 L20.75932647,48.596500400000004 C9.29426704,48.59650039 0.0,39.30223335 0.0,27.837173930000002 L0.0,20.75932647 C0.0,9.29426704 9.29426705,0.0 20.75932647,0.0 Z" style="fill:#38729d;opacity:1.0;"></path>
                        </g>
                    </svg>
                </div>
            </div>
          </div>
        </div>   
        <div class="col-sm-6">
          
          <div id="shb3JLQp6V7KxBybb">
            <div id="w5imXYdDBIS2tvFb" style="padding-top:31.27806871%;transform:rotate(0deg);">
              <div id="CpoQh6MMLLOhvpFM" style="top:0px;left:0px;width:100%;position:absolute;height:100%;">
                
                <div id="dVTeARHT70z4xbsO" style="flex-direction:column;display:flex;width:100%;justify-content:flex-start;opacity:1.0;height:100%;">
                   
                    @foreach ($question->options as $option )
                      @if($option->is_answered == 1)
                        @if($option->is_answered == $option->is_correct)
                          <p id="ITwhsI0sqpvHKyvM" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;">
                            {{ $option->option }}
                          </p>
                        @else
                          <p id="ITwhsI0sqpvHKyvM" style="text-transform:none;color:#cf2b2b;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;">
                            {{ $option->option }}
                          </p>
                        @endif
                      @endif
                    @endforeach

                </div>

                <svg id="m13d5GvtMCd102bB" viewBox="0 0 102.3081 32.0" preserveAspectRatio="none" style="overflow:hidden;top:0%;left:0%;width:100%;position:absolute;opacity:1.0;height:100%; z-index: -1;">
                  <g id="AAxFpb5OiP7306Hu" style="transform:scale(1, 1);">
                    <path id="hPgkMdwv0CI8o24q" d="M86.30810697890075,0.0 L16.0,0.0 L0.0,16.0 L16.0,32.0 L86.30810697890075,32.0 L102.30810697890075,16.0 L86.30810697890075,0.0" style="fill:#38729d;opacity:1.0;">
                    </path>
                  </g>
                </svg>
              </div>
            </div>
          </div>


        </div>

      @endforeach
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
              <p id="FGBfVUZLcHXHf5Qv" style="text-transform:none;color:#ffffff;letter-spacing:0em;font-family:YAFLd8sKbwc-1;line-height:1.4em;text-align:center;"><span id="RADNsJ5kwiBYwjPH" style="color:#ffffff;font-weight:700;">{{$quiz->result}}</span><br></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
           
        </div>       
    </div>
    

@endsection
