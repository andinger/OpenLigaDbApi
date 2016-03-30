# OpenLigaDb Api

Wraps the SOAP-based API of [http://www.openligadb.de/](http://www.openligadb.de/) and returns easy-to-use PHP-Objects
Currently not all provided methods are supported by this little project. Feel free to fork and add the missing methods by a pull-request.

## Installation

    composer require andinger/openligadb-api

## Usage

#### 1. Create a new Client-Object
    
    // use the standard wsdl url
    $client = new Andinger\OpenLigaDbApi\Client();
    
    // use another wsdl url
    $client = new Andinger\OpenLigaDbApi\Client('https://my.custom.wsdl.url.com/...wsdl');
    
#### 2. Call the methods

    $client->getAvailableLeagues()
    $client->getAvailableSports()
    $client->getAvailableGroups($league, $season)
    $client->getAvailableLeaguesBySport($sportId)
    $client->getGoalsByMatch($matchId)
    $client->getGoalsByLeagueSeason($league, $season)
    $client->getCurrentGroup($league)
    $client->getMatchesByGroupLeagueSeason($groupOrderId, $league, $season)
    $client->getMatchesByLeagueSeason($league, $season)
    $client->getTeamsByLeagueSeason($league, $season)
    $client->getMatchesByTeams($teamId1, $teamId2)
    
All methods in the Client-Class are documented    
    
## Further Information

See [http://www.openligadb.de](http://www.openligadb.de) for further information