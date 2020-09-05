<div class="ro" id="game">
    <div class="ro-bg row">
        <!---->
        <div class="ro-table-container">
            @include('games.roulette._latest_bets')
            @include('games.roulette._table')
        </div>
        <!---->
        @include('games.roulette._controls')
       @include('games.roulette._game_actions')
    </div>
</div>
