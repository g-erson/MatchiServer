<html>
    <style>
        .box {
            display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
            display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
            display: -ms-flexbox;      /* TWEENER - IE 10 */
            display: -webkit-flex;     /* NEW - Chrome */
            display: flex;             /* NEW, Spec - Opera 12.1, Firefox*/
            align-items: center;
            flex-direction: column;
            font-family:verdana;
            font-size:18px;
        }
        .titleBox{
            font-size:22px;
        }
        .contentBox{
            flex-direction: row;
            text-align: center;
        }
        .leftContainer{
            flex-direction: column;
            float: left;
            justify-content: space-around;
        }
        .rightContainer{
            flex-direction: column;
            float: right;
            justify-content: space-around;
        }
        .item{
            background: tomato;
            padding: 5px;
            width: 200px;
            height: 150px;
            margin-top: 10px;
            
            line-height: 150px;
            color: white;
            font-weight: bold;
            font-size: 3em;
            text-align: center;
        }
    </style>
    <title>
        Technology: the good, the bad, and the ugly
    </title>
    <head>

    </head>
    <body>
    <div class="box">
        <div class="titleBox">
            <strong>Technology: the good, the bad, (<del>and the ugly</del>)</strong><br>
        </div>
        <div class="contentBox">
            A brief list of the ways in which technology has caused problems within our <br>
            society, as well as ways it has helped.<br>
            <div class="leftContainer">
                <strong>The good</strong>
                <div class="item">
                    1
                </div>
                <div class="item">
                    2
                </div>
                <div class="item">
                    3
                </div>
                <div class="item">
                    4
                </div>
                <div class="item">
                    5
                </div>
                <div class="item">
                    6
                </div>
                <div class="item">
                    7
                </div>
                <div class="item">
                    8
                </div>
            </div>
            <div class="rightContainer">
                <strong>The bad</strong>
                <div class="item">
                    1
                </div>
                <div class="item">
                    2
                </div>
                <div class="item">
                    3
                </div>
                <div class="item">
                    4
                </div>
                <div class="item">
                    5
                </div>
                <div class="item">
                    6
                </div>
                <div class="item">
                    7
                </div>
                <div class="item">
                    8
                </div>
                
            </div>
        </div>
    </div>
    </body>
</html>
