<template>
    <div>
        <div class="ro" id="game">
            <div class="ro-bg row">
                <div class="ro-table-container">
                    <!-- Start Latest Best -->
                    <div class="game-box-wrapper ro-results">
                        <h3> Latest bets </h3>
                        <ul class=""></ul>
                    </div>
                    <!-- Finish Latest Best -->
                    <!-- Start Table -->
                    <div class="ro-table-overflow">
                        <div class="ro-table">
                            <div class="ro-table-wrapper">
                                <div class="ro-table-inner">
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="0" class="ro-no green"> 0
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="3" class="ro-no red"> 3
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="6" class="ro-no black"> 6
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="9" class="ro-no red"> 9
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="12" class="ro-no red"> 12
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="15" class="ro-no black"> 15
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="18" class="ro-no red"> 18
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="21" class="ro-no red"> 21
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="24" class="ro-no black"> 24
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="27" class="ro-no red"> 27
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="30" class="ro-no red"> 30
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="33" class="ro-no black"> 33
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="36" class="ro-no red"> 36
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="3,6,9,12,15,18,21,24,27,30,33,36" class="ro-no trans ro-br"> 2:1
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="2" class="ro-no black"> 2
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="5" class="ro-no red"> 5
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="8" class="ro-no black"> 8
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="11" class="ro-no black"> 11
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="14" class="ro-no red"> 14
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="17" class="ro-no black"> 17
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="20" class="ro-no black"> 20
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="23" class="ro-no red"> 23
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="26" class="ro-no black"> 26
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="29" class="ro-no black"> 29
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="32" class="ro-no red"> 32
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="35" class="ro-no black"> 35
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="2,5,8,11,14,17,20,23,26,29,32,35" class="ro-no trans ro-br"> 2:1
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1" class="ro-no red"> 1
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="4" class="ro-no black"> 4
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="7" class="ro-no red"> 7
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="10" class="ro-no black"> 10
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="13" class="ro-no black"> 13
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="16" class="ro-no red"> 16
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="19" class="ro-no red"> 19
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="22" class="ro-no black"> 22
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="25" class="ro-no red"> 25
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="28" class="ro-no black"> 28
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="31" class="ro-no black"> 31
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="34" class="ro-no red"> 34
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,4,7,10,13,16,19,22,25,28,31,34" class="ro-no trans bb ro-br"> 2:1
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,2,3,4,5,6,7,8,9,10,11,12" class="ro-no third trans"> 1st 12
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="13,14,15,16,17,18,19,20,21,22,23,24" class="ro-no third trans"> 2nd 12
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="25,26,27,28,29,30,31,32,33,34,35,36" class="ro-no third trans ro-br"> 3rd 12
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18" class="ro-no sixth trans bb"> 1-18
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36" class="ro-no sixth trans bb"> even
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="2,4,6,8,10,11,13,15,17,20,22,24,26,28,29,31,33,35" class="ro-no sixth black-bet bb">
                                        <svg viewBox="0 0 100 60" preserveAspectRatio="none">
                                            <path d="M0,30 50,0 100,30 50,60z"></path>
                                        </svg>
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,3,5,7,9,12,14,16,18,19,21,23,25,27,30,32,34,36" class="ro-no sixth red-bet bb">
                                        <svg viewBox="0 0 100 60" preserveAspectRatio="none">
                                            <path d="M0,30 50,0 100,30 50,60z"></path>
                                        </svg>
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35" class="ro-no sixth trans bb"> odd
                                        <!---->
                                    </div>
                                    <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36" class="ro-no sixth trans ro-br bb"> 19-36
                                        <!---->
                                    </div>
                                    <div class="ro-overlay">
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="0,3" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="3,6" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="6,9" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="9,12" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="12,15" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="15,18" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="18,21" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="21,24" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="24,27" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="27,30" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="30,33" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="33,36" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="0,2,3" class="ro-corner clear-before">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="2,3" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="2,3,5,6" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="5,6" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="5,6,8,9" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="8,9" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="8,9,11,12" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="11,12" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="11,12,14,15" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="14,15" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="14,15,17,18" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="17,18" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="17,18,20,21" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="20,21" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="20,21,23,24" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="23,24" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="23,24,26,27" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="26,27" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="26,27,29,30" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="29,30" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="29,30,32,33" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="32,33" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="32,33,35,36" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="35,36" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="0,2" class="ro-split-h clear-before">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="2,5" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="5,8" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="8,11" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="11,14" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="14,17" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="17,20" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="20,23" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="23,26" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="26,29" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="29,32" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="32,35" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="0,1,2" class="ro-corner clear-before">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,2" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,2,4,5" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="4,5" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="4,5,7,8" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="7,8" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="7,8,10,11" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="10,11" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="10,11,13,14" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="13,14" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="13,14,16,17" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="16,17" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="16,17,19,20" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="19,20" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="19,20,22,23" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="22,23" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="22,23,25,26" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="25,26" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="25,26,28,29" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="28,29" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="28,29,31,32" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="31,32" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="31,32,34,35" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="34,35" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="0,1" class="ro-split-h clear-before">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,4" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="4,7" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="7,10" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="10,13" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="13,16" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="16,19" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="19,22" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="22,25" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="25,28" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="28,31" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="31,34" class="ro-split-h">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="0,1,2,3" class="ro-corner clear-before">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,2,3" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="1,2,3,4,5,6" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="4,5,6" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="4,5,6,7,8,9" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="7,8,9" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="7,8,9,10,11,12" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="10,11,12" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="10,11,12,13,14,15" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="13,14,15" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="13,14,15,16,17,18" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="16,17,18" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="16,17,18,19,20,21" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="19,20,21" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="19,20,21,22,23,24" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="22,23,24" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="22,23,24,25,26,27" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="25,26,27" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="25,26,27,28,29,30" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="28,29,30" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="28,29,30,31,32,33" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="31,32,33" class="ro-split-v">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="31,32,33,34,35,36" class="ro-corner">
                                            <!---->
                                        </div>
                                        <div @mouseover.self="hoverNums" @mouseleave.self="clearHoverNums" data-nums="34,35,36" class="ro-split-v">
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Finish Table -->
                </div>
                <!-- Start Controls -->
                <div class="ro-container ro-controls row">
                    <div class="ro-input col-12 col-md-4 px-3">
                        <div role="group" aria-invalid="true" class="form-group is-invalid" id="__BVID__304">
                            <label for="ctrl-bet0" class="d-block" id="__BVID__304__BV_label_">
                                <img alt="BTC" src="https://www.bitsler.com/static/img/currencies/btc.addb4668.png" class="currency-small"> Bet Amount
                                <!---->
                            </label>
                            <div class="bv-no-focus-ring">
                                <div role="group" class="input-group">
                                    <!---->
                                    <input id="ctrl-bet0" type="tel" autocomplete="off" aria-invalid="true" class="bet-amount form-control form-control-lg" aria-describedby="__BVID__304__BV_feedback_invalid_">
                                    <div class="input-group-append">
                                        <div class="input-group-text">BTC</div>
                                    </div>
                                </div>
                                <!---->
                            </div>
                        </div>
                        <div class="ro-amount-buttons">
                            <ul id="ctrl-bet-size" class="d-flex">
                                <li class="col btn btn-primary"> Reset
                                    <!---->
                                </li>
                                <li class="col btn btn-primary"> /2
                                    <!---->
                                </li>
                                <li class="col btn btn-primary"> x2
                                    <!---->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ro-buttons col-6 col-md-4 px-3">
                        <div class="row">
                            <div class="btn-play-tutorial text-center" style="width: 100%;">
                                <a href="/en/deposit" class="btn btn-success text-uppercase font-weight-bold"> spin wheel </a>
                            </div>
                            <div class="spin-details">
                                <div class="left-sd">
                                    <div>
                                        <span>Balance:</span>
                                        <span></span>
                                    </div>
                                    <div>
                                        <span>Payout:</span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="right-sd">
                                    <div>
                                        <span>Chance:</span>
                                        <span></span>
                                    </div>
                                    <div>
                                        <span>Mult:</span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chips-select-wrapper col-6 col-md-4 px-3">
                        <h3>Select Chip Value</h3>
                        <div class="chips-select clearfix">
                            <div class="chip blue">
                                <span class="amount">1</span>
                                <span class="title">μBTC</span>
                            </div>
                            <div class="chip blue">
                                <span class="amount">2</span>
                                <span class="title">μBTC</span>
                            </div>
                            <div class="chip blue">
                                <span class="amount">5</span>
                                <span class="title">μBTC</span>
                            </div>
                            <div class="chip green">
                                <span class="amount">10</span>
                                <span class="title">μBTC</span>
                            </div>
                            <div class="chip green">
                                <span class="amount">25</span>
                                <span class="title">μBTC</span>
                            </div>
                            <div class="chip green">
                                <span class="amount">50</span>
                                <span class="title">μBTC</span>
                            </div>
                            <div class="chip purple">
                                <span class="amount">0.1</span>
                                <span class="title">mBTC</span>
                            </div>
                            <div class="chip purple">
                                <span class="amount">0.5</span>
                                <span class="title">mBTC</span>
                            </div>
                            <div class="chip purple">
                                <span class="amount">1</span>
                                <span class="title">mBTC</span>
                            </div>
                            <div class="chip orange">
                                <span class="amount">5</span>
                                <span class="title">mBTC</span>
                            </div>
                            <div class="chip orange">
                                <span class="amount">10</span>
                                <span class="title">mBTC</span>
                            </div>
                            <div class="chip orange">
                                <span class="amount">50</span>
                                <span class="title">mBTC</span>
                            </div>
                            <div class="chip red">
                                <span class="amount">0.1</span>
                                <span class="title">BTC</span>
                            </div>
                            <div class="chip gray"></div>
                        </div>
                        <!---->
                    </div>
                </div>
                <!-- Finish Controls -->
                <!-- Start Game Actions -->
                <div class="game-wrapper">
                    <!---->
                    <div class="max-height-400">
                        <!---->
                    </div>
                    <!---->
                    <div class="game-bottom row">
                        <!---->
                        <!---->
                        <div class="col btn">
                            <svg version="1.1" role="presentation" width="16" height="15.803163444639718" viewBox="0 0 569 562" class="fa-icon">
                                <path d="M78 273c0,-32 12,-70 29,-98 4,-7 14,-23 21,-29 21,-23 42,-42 72,-54l18 -7c56,-19 121,-13 171,17 5,3 9,6 13,8 3,2 11,7 12,9 -2,3 -8,9 -11,12 -4,4 -8,8 -12,12 -2,2 -21,22 -24,23l0 1c4,0 10,2 13,3l38 10c24,6 52,15 76,21l50 13c5,2 22,6 25,7l-27 -102c-7,-28 -16,-59 -24,-88 0,-3 -1,-4 -2,-7 -1,-6 0,-4 -2,-5 0,3 -3,4 -5,6l-42 42c-3,-1 -5,-4 -8,-6 -28,-21 -56,-37 -90,-48 -12,-4 -27,-7 -41,-9 -11,-2 -38,-5 -47,-4 -7,1 -16,0 -24,2 -16,2 -26,3 -43,7 -51,14 -92,37 -128,74 -8,8 -10,10 -16,16 -1,2 -1,2 -2,4 -7,8 -10,12 -17,21 -29,44 -47,98 -47,155l0 20c0,11 2,9 6,10l48 13c4,1 9,2 13,4l12 2c0,-2 -1,-6 -2,-9 -3,-18 -3,-29 -3,-46zm476 -22c-4,-1 -7,-1 -10,-2l-58 -16c0,8 7,25 5,52 0,3 0,5 0,8 0,21 -9,56 -19,75 -1,2 -1,4 -2,5 -8,14 -16,28 -26,40 -10,12 -16,19 -30,29 -5,4 -11,9 -17,13 -3,2 -5,3 -9,5 -27,16 -63,28 -103,28 -28,0 -49,-5 -74,-14 -6,-2 -11,-4 -16,-6 -6,-3 -38,-21 -41,-25l48 -48c-3,0 -5,-1 -7,-2l-19 -5c-8,-2 -16,-4 -25,-6 -16,-5 -35,-9 -51,-14l-88 -24c-2,0 -4,-1 -6,-1 -1,-1 -5,-1 -6,-2 0,4 2,9 3,13 1,4 2,8 4,12 2,9 4,17 6,26l27 100c2,5 13,47 13,51 3,-1 5,-4 7,-6 6,-6 40,-40 42,-42 15,12 43,31 60,38 9,5 16,8 26,12 53,19 111,22 166,8 30,-7 48,-17 73,-30 20,-11 42,-29 58,-45 1,-2 2,-3 4,-5l8 -9c18,-20 36,-49 46,-74 1,-2 2,-4 3,-6 14,-35 22,-80 19,-118l-1 -12c-3,0 -8,-2 -10,-3z"></path>
                                <!---->
                            </svg>
                            <span>Autobet</span>
                        </div>
                        <!---->
                        <div class="col btn">
                            <svg version="1.1" role="presentation" width="6.857142857142857" height="16" viewBox="0 0 768 1792" class="fa-icon">
                                <path d="M768 352v1088q0 26-19 45t-45 19-45-19l-333-333h-262q-26 0-45-19t-19-45v-384q0-26 19-45t45-19h262l333-333q19-19 45-19t45 19 19 45z"></path>
                                <!---->
                            </svg>
                            <span>Sound</span>
                        </div>
                        <!---->
                        <a href="/en/provably-fair/seeds" class="col btn">
                            <svg version="1.1" role="presentation" width="16" height="12.14993954050786" viewBox="0 0 827 628" class="fa-icon">
                                <path d="M413 628l55 -225 38 -159 190 0 -101 260c-1,0 -1,2 -1,2l0 0c0,65 52,117 116,117 64,0 115,-51 117,-114 0,-2 0,-4 -1,-6l-112 -259 10 0 0 -65 -202 0 -29 0c-22,18 -49,28 -80,28 -30,0 -57,-10 -79,-28l-29 0 -202 0 0 64 -102 261c-1,0 -1,2 -1,2l0 0c0,65 52,117 116,117 64,0 115,-51 116,-114 1,-2 1,-4 0,-6l-112 -259 201 0 38 159 54 225zm-396 -122l199 0 -104 -240 -95 240zm594 0l199 0 -104 -240 -95 240zm-198 -506c46,0 83,37 83,83 0,45 -37,82 -83,82 -45,0 -82,-37 -82,-82 0,-46 37,-83 82,-83z"></path>
                                <!---->
                            </svg>
                            <span>Provably Fair</span>
                        </a>
                        <div class="col btn">
                            <svg version="1.1" role="presentation" width="16" height="15.963652885052248" viewBox="0 0 2201 2196" class="fa-icon">
                                <path d="M2089 1973l-1866 0 0 -1861c0,-62 -50,-112 -111,-112 -62,0 -112,50 -112,112l0 1972c0,62 50,112 112,112l1977 0c62,0 112,-50 112,-112 0,-62 -50,-111 -112,-111z"></path>
                                <path d="M639 1787l1137 -1191 3 202c0,56 43,102 97,109 5,1 10,1 16,1 62,-1 111,-51 110,-113l-6 -478c-1,-61 -51,-110 -113,-110l-477 6c-62,1 -112,52 -111,113 1,62 52,111 113,111l214 -3c-347,363 -801,837 -1149,1200 -111,109 37,272 166,153z"></path>
                                <!---->
                            </svg>
                            <span>Statistics</span>
                        </div>
                    </div>
                </div>
                <!-- Finish Game Actions -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RouletteGameComponent",
        methods: {
            hoverNums: function (event) {
                var nums = event.target.dataset.nums,
                    numsArr = nums.split(','),
                    $this = this;

                this.clearHoverNums();

                numsArr.forEach(function(num) {
                    $this.$el.querySelector('.ro-no[data-nums="'+ num +'"]').classList.add('hover');
                });
            },
            clearHoverNums() {
                this.$el.querySelectorAll('.ro-no').forEach(function (el) {
                    el.classList.remove('hover')
                })
            }
        },
    }
</script>

<style scoped>

</style>
