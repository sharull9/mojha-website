<section class="container">
  <div class="card mb-5 p-3 p-lg-5">
    <h1>Create New Post</h1>
    <div class="form-floating mb-4">
      <input
        id="blogTitle"
        type="text"
        class="form-control"
        placeholder="Blog Title"
      />
      <label for="blogTitle">Blog Title</label>
    </div>
    <div class="form-floating mb-4">
      <textarea
        id="blogDescription"
        class="form-control"
        placeholder="Short Description"
        style="height: 150px"
        required
      ></textarea>
      <label for="blogDescription">Short Description</label>
    </div>
    <div class="form-floating mb-4">
      <div
        id="blogContent"
        class="border border-brand"
        style="min-height: 400px"
      ></div>
    </div>
    <div class="form-floating mb-4">
      <input id="tags" type="text" class="form-control" placeholder="Tags" />
      <label for="tags">Tags:</label>
      <span>Add more tag in this format (Still Life, Urban, Nature)</span>
    </div>
    <div class="form-floating mb-4">
      <input
        id="categories"
        type="text"
        class="form-control"
        placeholder="Categories"
      />
      <label for="categories">Categories:</label>
      <span>Add more tag in this format (Still Life, Urban, Nature)</span>
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Create Post</button>
    </div>
  </div>
</section>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
  var toolbarOptions = [
    [
      "bold",
      "italic",
      "underline",
      "strike",
      "link",
      "blockquote",
      "code-block",
    ],
    [{ header: [1, 2, 3, 4, 5, 6, false] }],
    [
      { list: "ordered" },
      { list: "bullet" },
      { script: "sub" },
      { script: "super" },
      { indent: "-1" },
      { indent: "+1" },
      { align: [] },
    ],
    [{ direction: "rtl" }, "clean"],
    [{ color: [] }, { background: [] }],
    [{ image: "" }, { video: "" }],
  ];
  var options = {
    debug: "info",
    modules: {
      toolbar: toolbarOptions,
    },
    placeholder: "Write Blog content here...",
    theme: "snow",
  };

  var quill = new Quill("#blogContent", options);
</script>
