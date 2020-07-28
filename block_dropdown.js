wp.blocks.registerBlockType("textbookplugin/block_dropdown", {
  title: __("Dropdown Block"),
  category: "common",
  attributes: {},

  edit: function () {
    return (
      <div>
        <button class="dropbtn">License</button>
        <div class="dropdown-content">
          <a href="#">CC0</a>
          <a href="#">CC BY</a>
          <a href="#">CC BY-SA</a>
        </div>
      </div>
    );
  },
  save: function (props) {
    return <button class="dropbtn">License</button>;
  },
});
