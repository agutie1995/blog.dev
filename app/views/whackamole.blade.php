<head>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/whackamole.css') }}">
</head>

<body>

    <div id='container'>
        <div id='sideConsole'>
            <h1>Whack-a-Mole</h1>
            
            <button id='start'>Start!</button>

            <input id='pointsCounter' name='point' type='text' placeholder='0'>
        </div>

        <div id='gameBoard'>
            <div id='boxOne' class='molehole'></div>
            <div id='boxTwo' class='molehole'></div>
            <div id='boxThree' class='molehole'></div>

            <div id='boxFour' class='molehole'></div>
            <div id='boxFive' class='molehole'></div>
            <div id='boxSix' class='molehole'></div>

            <div id='boxSeven' class='molehole'></div>
            <div id='boxEight' class='molehole'></div>
            <div id='boxNine' class='molehole'></div>
        </div>
    </div>

{{-- <script type="text/javascript" src="https://code.jquery.com//jquery-2.1.1.min.js"></script> --}}
<script src="/js/whackamole.js"></script>
</body>