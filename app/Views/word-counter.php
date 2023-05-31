<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">Word Counter</h2>
        <p class="lead lh-sm px-md-5 px-xl-7 mb-5">
          Word Counter is a simple web application that counts words,
          characters, sentences, paragraphs, and pages in real time while also
          verifying spelling and grammar.
        </p>
      </div>
    </div>
    <div class="px-md-3">
      <div class="word-layout px-lg-20 py-2 py-lg-5 align-items-baseline">
        <div>
          <img src="/word.svg" alt="" />
          <p class="mb-0" id="words">Words</p>
          <p class="mb-0">0</p>
        </div>
        <div>
          <img src="/character.svg" alt="" />
          <p class="mb-0" id="characters">Characters</p>
          <p class="mb-0">0</p>
        </div>
        <div>
          <img src="/sentence.svg" alt="" />
          <p class="mb-0" id="sentences">Sentences</p>
          <p class="mb-0">0</p>
        </div>
        <div>
          <img src="/read-time.svg" alt="" />
          <p class="mb-0">Read Time</p>
          <p class="mb-0" id="read-time">0 Min.</p>
        </div>
      </div>
      <div class="form-floating output">
        <textarea
          id="text-input"
          class="form-control"
          placeholder="Input"
          style="height: 250px"
          name="text-input"
          required
        ></textarea>
        <label for="text-input">Input</label>
      </div>
      <button
        class="btn btn-primary mx-auto mt-5"
        id="password-generator-button"
        onclick="wordCounter()"
        id="word-counter-button"
      >
        Count Words
      </button>
    </div>
  </div>

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
