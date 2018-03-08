<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>

    <div id="app">
        <!-- Components will go here -->
        <ais-index app-id="{{ config('scout.algolia.id') }}"
                   api-key="{{ env('ALGOLIA_SEARCH') }}"
                   index-name="posts">

            <ais-search-box placeholder="Find products..."></ais-search-box>


            <my-results>
                <template slot-scope="{ result }">
                    <div>

                        <h4>@{{ result.progName }}</h4>
                        <ul>
                            <li>@{{ result.description }}</li>
                        </ul>
                    </div>
                </template>
            </my-results>

        </ais-index>
    </div>

    </body>
</html>
