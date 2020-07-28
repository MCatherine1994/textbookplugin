wp.blocks.registerBlockType("textbookplugin/block_data_field", {
  title: __("Data Field Block"),
  category: "common",
  attributes: { date: { type: "date" } },

  edit: function (props) {
    return <div>Published Date: {props.attributes.date}</div>;
  },
  save: function (props) {
    return <div>Published Date: {props.attributes.date}</div>;
  },
});
