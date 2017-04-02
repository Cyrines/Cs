<label for="date"> Date de la visite </label>
<input type="date" name="date" id="date" value="">
<ul data-role="listview">
<script>  $( "#mylistview" ).listview({
    autodividers: true,

    // the selector function is passed a <li> element from the listview;
    // it should return the appropriate divider text for that <li>
    // element as a string
    autodividersSelector: function ( li ) {
      var out = /* generate a string based on the content of li */;
      return out;
    }
  });
  </script>
</ul>
