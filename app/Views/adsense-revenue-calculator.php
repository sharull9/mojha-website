<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">AdSense Revenue Calculator</h2>
        <p class="lead lh-sm px-md-5 px-xl-7 mb-5">
          Calculate how much revenue you can generate by using AdSense on your
          website.
        </p>
      </div>
    </div>
    <div class="px-md-3 ad-max">
      <div class="form-floating mb-2">
        <input
          id="daily-page-impressions"
          type="number"
          class="form-control"
          placeholder="Daily page impressions:"
        />
        <label for="daily-page-impressions">Daily page impressions:</label>
      </div>
      <div class="form-floating mb-2">
        <input
          id="click-through-rate"
          type="number"
          class="form-control"
          placeholder="Click-through rate (CTR) in %:"
        />
        <label for="click-through-rate">Click-through rate (CTR) in %:</label>
      </div>
      <div class="form-floating mb-2">
        <input
          id="cost-per-click"
          type="number"
          class="form-control"
          placeholder="Cost per click (CPC):"
        />
        <label for="cost-per-click">Cost per click (CPC):</label>
      </div>
      <button
        class="btn btn-primary mx-auto mt-5"
        id="password-generator-button"
        onclick="calculateAdsenseEarning()"
        id="adsense-calculator-button"
      >
        Calculate
      </button>
    </div>
  </div>

  <section class="container card mb-5 p-0 overflow-hidden">
    <div class="bg-brand p-3">
      <h3 class="mb-0 text-center text-white">AdSense Earnings Result</h3>
    </div>
    <div class="p-3">
      <h4 class="mb-0">Earnings Result</h4>
      <div class="d-flex py-1 flex-column">
        <div class="">Daily Earnings</div>
        <div class="ps-1" id="d_earning">$0.00</div>
      </div>
      <div class="d-flex py-1 flex-column">
        <div class="">Monthly Earnings</div>
        <div class="ps-1" id="m_earning">$0.00</div>
      </div>
      <div class="d-flex py-1 flex-column">
        <div class="">Yearly Earnings</div>
        <div class="ps-1" id="y_earning">$0.00</div>
      </div>
    </div>
    <div class="p-3">
      <h4 class="mb-0">Clicks Result</h4>
      <div class="d-flex py-1 flex-column">
        <div class="">Daily Earnings</div>
        <div class="ps-1" id="d_click">0</div>
      </div>
      <div class="d-flex py-1 flex-column">
        <div class="">Monthly Earnings</div>
        <div class="ps-1" id="m_click">0</div>
      </div>
      <div class="d-flex py-1 flex-column">
        <div class="">Yearly Earnings</div>
        <div class="ps-1" id="y_click">0</div>
      </div>
    </div>
  </section>

  <div
    class="container card p-3 mb-5 d-flex flex-column flex-md-row flex-wrap"
    style="gap: 0.5rem"
  >
    <div class="py-3 col-12 text-center bg-brand rounded-2">
      <h3 class="mb-0 text-white">Related tools</h3>
    </div>
    <div class="col-12 d-flex flex-wrap" style="gap: 0.5rem">
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/domain-authority-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Domain authority checker</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/page-authority-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Page Authority Checker</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/google-index-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Google Index Checker</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/meta-tag-generator.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Meta Tag Generator</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/meta-tags-analyzer.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Meta Tags Analyzer</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/open-graph-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Open Graph Checker</p>
        </div>
      </a>
    </div>
  </div>
</section>
