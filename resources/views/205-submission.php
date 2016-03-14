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
        }
        .titleBox{
            background:tomato;
        }
        .contentBox{
            background:tomato;
        }
        .leftContainer{
            flex-direction: column;
            float: left;
            background:tomato;
        }
        .rightContainer{
            flex-direction: column;
            float: right;
            background:tomato;
        }
    </style>
    <title>
        Technology: the good, the bad, and the ugly
    </title>
    <head>

    </head>
    <body>
    <div class="box">
        <li class="titleBox">
            Technology: the good, the bad, and the ugly
        </li>
        <li class="contentBox">
            <li class="leftContainer">
            </li>
            <li class="rightContainer">
            </li>
        </li>
    </div>
    </body>
</html>
