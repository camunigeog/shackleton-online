<form class="collection-search-form" action="{$baseUrl}/search/" method="get">
  <input type="hidden" name="filterTitle" value="{$searchFilterTitle}" />
  <input type="hidden" name="include" value="{$searchInclude}" />
  <button type="submit">Search</button>
  <label for="collectionSearchText">
    <input type="text" name="query" id="collectionSearchText" placeholder="Search for an expedition, crew member, country, etc&hellip;" />
  </label>
</form>