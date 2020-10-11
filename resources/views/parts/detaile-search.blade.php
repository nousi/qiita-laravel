<div class="detailed-search col-md-3">
  <form action="{{ route('likes.index')}}" method="GET" class="detailed-search_form">
    <div class="detailed-search_form_head">記事の条件</div>
    <div class="detailed-search_form_body">
      <div class="search-conditions keyword-terms">
        <div>
          <span class="search-conditions_title keyword-terms_title">キーワード</span>
        </div>
        <div class="search-warapper">
          <div class="form-inline search-form">
            <i class="fas fa-search"></i>
            @if(isset($keyword))
            <input type="search" name="search" value="{{$keyword}}" placeholder="キーワードを入力" aria-label="検索...">
            @else
            <input type="search" name="search" placeholder="キーワードを入力" aria-label="検索...">
            @endif
          </div>
        </div>
      </div>
      <div class="search-conditions order-terms">
        <div>
          <span class="search-conditions_title order-terms_title">順番</span>
        </div>
        <div class="search-conditions_radio">
          <input type="radio" name="order-terms" value="day" class="">LGTM数順
        </div>
        <div class="search-conditions_radio">
          <input type="radio" name="order-terms" value="week">新着順
        </div>
      </div>
      <div class="search-conditions date-terms">
        <div>
          <span class="search-conditions_title">日付</span>
        </div>
        <div class="search-conditions_radio">
          <input type="radio" name="date-terms" value="day" class="">1日
        </div>
        <div class="search-conditions_radio">
          <input type="radio" name="date-terms" value="week">1週間
        </div>
        <div class="search-conditions_radio">
          <input type="radio" name="date-terms" value="month">月間
        </div>
        <div class="search-conditions_radio">
          <input type="radio" name="date-terms" value="period">期間指定
        </div>
        <div class="search-conditions_radio">
          <span>
            <label for="">
              開始:<input type="date" class="input-small" name="piriod-start" value="2020-01-11" placeholder="開始">
            </label>
          </span>
          <span>
            <label for="">
              終了:<input type="date" class="input-small" name="piriod-end" value="2020-01-11" placeholder="終了">
            </label>
          </span>
        </div>
      </div>
      <div class="search-conditions lgtm-terms">
        <div>
          <span class="search-conditions_title lgtm-terms_title">LGTM</span>
        </div>
        <div class="search-conditions_radio">
          <span>
            <label for="">
              最低:<input type="number" class="input-small" name="lgtm-min" placeholder="100">
            </label>
          </span>
          <span>
            <label for="">
              最高:<input type="number" class="input-small" name="lgtm-max" placeholder="1000">
            </label>
          </span>
        </div>
      </div>


    </div>
  </form>
</div>