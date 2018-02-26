<!DOCTYPE html>
<html>
  <body>
    <table class="print t1"> <!-- Delete "t1" class to remove row numbers. -->
      <caption>Print-Friendly Table</caption>
      <thead>
        <tr>
          <th></th>
          <th>Column Header</th>
          <th>Column Header</th>
          <th>Multi-Line<br/>Column<br/>Header</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td>data</td>
          <td>Multiple<br/>lines of<br/>data</td>
          <td>data</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>

<style>
  /* THE FOLLOWING CSS IS REQUIRED AND SHOULD NOT BE MODIFIED. */
    div.fauxRow {
      display: inline-block;
      vertical-align: top;
      width: 100%;
      page-break-inside: avoid;
    }
    table.fauxRow {border-spacing: 0;}
    table.fauxRow > tbody > tr > td {
      padding: 0;
      overflow: hidden;
    }
    table.fauxRow > tbody > tr > td > table.print {
      display: inline-table;
      vertical-align: top;
    }
    table.fauxRow > tbody > tr > td > table.print > caption {caption-side: top;}
    .noBreak {
      float: right;
      width: 100%;
      visibility: hidden;
    }
    .noBreak:before, .noBreak:after {
      display: block;
      content: "";
    }
    .noBreak:after {margin-top: -594mm;}
    .noBreak > div {
      display: inline-block;
      vertical-align: top;
      width:100%;
      page-break-inside: avoid;
    }
    table.print > thead {white-space: nowrap;} /* Soft-wrapping not allowed in thead, but <br/> tags are OK. */
    table.print > tbody > tr {page-break-inside: avoid;}
    table.print > tbody > .metricsRow > td {border-top: none !important;}

  /* THE FOLLOWING CSS IS REQUIRED, but the values may be adjusted. */
    /* NOTE: All size values that can affect an element's height should use the px unit! */
    table.fauxRow, table.print {
      font-size: 16px;
      line-height: 20px;
    }

  /* THE FOLLOWING CSS IS OPTIONAL. */
    body {counter-reset: t1;} /* Delete to remove row numbers. */
    .noBreak .t1 > tbody > tr > :first-child:before {counter-increment: none;} /* Delete to remove row numbers. */
    .t1 > tbody > tr > :first-child:before { /* Delete to remove row numbers. */
      display: block;
      text-align: right;
      counter-increment: t1 1;
      content: counter(t1);
    }
    table.fauxRow, table.print {
      font-family: Tahoma, Verdana, Georgia; /* Try to use fonts that don't get bigger when printed. */
      margin: 0 auto 0 auto; /* Delete if you don't want table to be centered. */
    }
    table.print {border-spacing: 0;}
    table.print > * > tr > * {
      border-right: 2px solid black;
      border-bottom: 2px solid black;
      padding: 0 5px 0 5px;
    }
    table.print > * > :first-child > * {border-top: 2px solid black;}
    table.print > thead ~ * > :first-child > *, table.print > tbody ~ * > :first-child > * {border-top: none;}
    table.print > * > tr > :first-child {border-left: 2px solid black;}
    table.print > thead {vertical-align: bottom;}
    table.print > thead > .borderRow > th {border-bottom: none;}
    table.print > tbody {vertical-align: top;}
    table.print > caption {font-weight: bold;}
</style>

<script>
  (function() { // THIS FUNCTION IS NOT REQUIRED. It just adds table rows for testing purposes.
    var rowCount = 100
      , tbod = document.querySelector("tbody")
      , row = tbod.rows[0];
    for(; --rowCount; tbod.appendChild(row.cloneNode(true)));
  })();

  (function() { // THIS FUNCTION IS REQUIRED.
    if(/Firefox|MSIE/i.test(navigator.userAgent))
      var formatForPrint = function(table) {
        var noBreak = document.createElement("div")
          , noBreakTable = noBreak.appendChild(document.createElement("div")).appendChild(table.cloneNode())
          , tableParent = table.parentNode
          , tableParts = table.children
          , partCount = tableParts.length
          , partNum = 0
          , cell = table.querySelector("tbody > tr > td");
        noBreak.className = "noBreak";
        for(; partNum < partCount; partNum++) {
          if(!/tbody/i.test(tableParts[partNum].tagName))
            noBreakTable.appendChild(tableParts[partNum].cloneNode(true));
        }
        if(cell) {
          noBreakTable.appendChild(cell.parentNode.parentNode.cloneNode()).appendChild(cell.parentNode.cloneNode(true));
          if(!table.tHead) {
            var borderRow = document.createElement("tr");
            borderRow.appendChild(document.createElement("th")).colSpan="1000";
            borderRow.className = "borderRow";
            table.insertBefore(document.createElement("thead"), table.tBodies[0]).appendChild(borderRow);
          }
        }
        tableParent.insertBefore(document.createElement("div"), table).style.paddingTop = ".009px";
        tableParent.insertBefore(noBreak, table);
      };
    else
      var formatForPrint = function(table) {
        var tableParent = table.parentNode
          , cell = table.querySelector("tbody > tr > td");
        if(cell) {
          var topFauxRow = document.createElement("table")
            , fauxRowTable = topFauxRow.insertRow(0).insertCell(0).appendChild(table.cloneNode())
            , colgroup = fauxRowTable.appendChild(document.createElement("colgroup"))
            , headerHider = document.createElement("div")
            , metricsRow = document.createElement("tr")
            , cells = cell.parentNode.cells
            , cellNum = cells.length
            , colCount = 0
            , tbods = table.tBodies
            , tbodCount = tbods.length
            , tbodNum = 0
            , tbod = tbods[0];
          for(; cellNum--; colCount += cells[cellNum].colSpan);
          for(cellNum = colCount; cellNum--; metricsRow.appendChild(document.createElement("td")).style.padding = 0);
          cells = metricsRow.cells;
          tbod.insertBefore(metricsRow, tbod.firstChild);
          for(; ++cellNum < colCount; colgroup.appendChild(document.createElement("col")).style.width = cells[cellNum].offsetWidth + "px");
          var borderWidth = metricsRow.offsetHeight;
          metricsRow.className = "metricsRow";
          borderWidth -= metricsRow.offsetHeight;
          tbod.removeChild(metricsRow);
          tableParent.insertBefore(topFauxRow, table).className = "fauxRow";
          if(table.tHead)
            fauxRowTable.appendChild(table.tHead);
          var fauxRow = topFauxRow.cloneNode(true)
            , fauxRowCell = fauxRow.rows[0].cells[0];
          fauxRowCell.insertBefore(headerHider, fauxRowCell.firstChild).style.marginBottom = -fauxRowTable.offsetHeight - borderWidth + "px";
          if(table.caption)
            fauxRowTable.insertBefore(table.caption, fauxRowTable.firstChild);
          if(tbod.rows[0])
            fauxRowTable.appendChild(tbod.cloneNode()).appendChild(tbod.rows[0]);
          for(; tbodNum < tbodCount; tbodNum++) {
            tbod = tbods[tbodNum];
            rows = tbod.rows;
            for(; rows[0]; tableParent.insertBefore(fauxRow.cloneNode(true), table).rows[0].cells[0].children[1].appendChild(tbod.cloneNode()).appendChild(rows[0]));
          }
          tableParent.removeChild(table);
        }
        else
          tableParent.insertBefore(document.createElement("div"), table).appendChild(table).parentNode.className="fauxRow";
      };
    var tables = document.body.querySelectorAll("table.print")
      , tableNum = tables.length;
    for(; tableNum--; formatForPrint(tables[tableNum]));
  })();
</script>