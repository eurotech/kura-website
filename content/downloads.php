<?php?>

<div>
  <h1>Downloads</h1>
  <div id="downloads-filters"></div>
  <div style="max-height: 600px; overflow: scroll">
    <table id="downloads-table" class="table"></table>
  </div>
  <script src="/content/javascript/table.js"></script>
  <script defer>
  var renderLink = function (url) {
    var link = document.createElement('a')
    link.className = "fa fa-download"
    link.href = url
    link.target = '_blank'
    return link
  }
  var renderBool = function (bool) {
    var icon = document.createElement('i')
    if (bool === 'Yes') {
      icon.className = 'fa fa-check green'
    } else {
      icon.className = 'fa fa-times red'
    }
    return icon
  }
  var columnsDescriptors = [
    {
      name: "URL",
      renderer: renderLink
    },
    {
      name: "Platform",
      filter: true
    },
    {
      name: "Version",
      filter: true,
      default: '3.2.0'
    },
    {
      name: "Web Ui",
      renderer: renderBool
    },
    {
      name: "Network Admin",
      filter: true,
      renderer: renderBool
    },
    {
      name: "EPL",
      renderer: renderBool
    }
  ]
  new DataTable('/content/data/downloads.json',
                'downloads-table',
                'downloads-filters',
                columnsDescriptors)
  </script>
</div>
