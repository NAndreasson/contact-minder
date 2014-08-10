<?php namespace ContactMinder;

use \Contact;

class SearchHandler {

  /**
   * Returns a db Query which the caller can use ->get() on
   * @param  String $searchQuery Could be something like: "niklas has:twitter" 
   * @return Query  
   */
  public static function constructDbQuery($searchQuery)
  {
    $dbQuery = Contact::with('contactdata');

    preg_match_all("/has:(\w+)/", $searchQuery, $matches);

    $fullmatches = $matches[0];

    // no "tag" matches like "has:twitter"
    if ( count($fullmatches) == 0 )
    {
      $dbQuery = self::searchByName($dbQuery, $searchQuery);
      return $dbQuery;
    }

    // get submatches
    $submatches = $matches[1];

    $searchQueryArray = explode(' ', $searchQuery);

    for ($i = 0; $i < count($submatches); $i++) {
      // match should correspond to something like mail, twitter etc
      $submatch = $submatches[$i];

      // remove the full match from the exploded searchdbQuery 
      $indexInSearchQuery = array_search($fullmatches[$i], $searchQueryArray);
      unset( $searchQueryArray[ $indexInSearchQuery ] );

      $dbQuery = $dbQuery->whereHas('contactdata', function($q) use(&$submatch)
      {
        // get stuff and so on
        $q->where('type', 'like', $submatch . '%');
      });   
    }

    $remainingSearchQuery = implode(' ', $searchQueryArray);
    $dbQuery = self::searchByName($dbQuery, $remainingSearchQuery);

    return $dbQuery;
  }

  private static function searchByName($dbQuery, $searchQuery)
  {
    return $dbQuery->where('firstname', 'LIKE', '%' . $searchQuery . '%');
  }

}