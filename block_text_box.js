wp.blocks.registerBlockType("textbookplugin/block_text_box", {
  title: __("Text Box Block"),
  category: "common",
  attributes: { author: { type: "string" } },

  edit: function (props) {
    function updateContent(event) {
      props.setAttributes({ author: event.target.value });
    }

    return (
      <div>
        <label for="author">Author</label>
        <input
          type="text"
          id="author"
          name="author"
          value={props.attributes.author}
          onChange={updateContent}
        />
      </div>
    );
  },
  save: function (props) {
    return (
      <div>
        <label for="author">Author</label>
        <input type="text" id="author" name="author" />
      </div>
    );
  },
});
