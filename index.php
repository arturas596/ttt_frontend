<?php
session_start();
include 'configdb.php';
//$result = $conn->query($product_array);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tic Tac Toe</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <script>
            var GLog=' ';
            </script>
        <?php
        //$gameLog="<script>document.writeln(this.currentTurn);</script>";
        ?>
        <div id=game-view>
            <div id=game-view-info>
{{infoMessage}}
            </div>
            <div id=game-view-squares>
                <div 
                v-for="(square, i) in squares"
                v-on:click="activeGame.makeMove(i)"
                class="game-view-square">
                {{square.value}}
                </div>
            </div>
            <div id=game-view-info>
            {{logMessage}}
                            </div>
        </div>
        <?php?>
        <script>
        /*const t=[];
        for(y=0;y<8;y++)
        t[y]=-1;*/
       var t1=-1;
       var t2=-1;
       var t3=-1;
       var t4=-1;
       var t5=-1;
       var t6=-1;
       var t7=-1;
       var t8=-1;

        </script>
        <script src="https://cdn.jsdelivr.net/npm/vue" charset="utf-8"></script>
        <script src="Square.js" charset="utf-8"></script>
        <script src="game.js" charset="utf-8"></script>
        <script type="text/javascript">
        let activeGame=new Game();
        let gameVue = new Vue({
            el:'#game-view',
            data: activeGame,
            computed: {
                infoMessage:function(){
                    if(this.inProgress){
                        return this.currentTurn+' Turn';
                    }
                    if(this.winner){
                        return this.winner +' wins';
                    }
                    if(!this.winner && !this.inProgress)
                    return 'draw';
                },
                
              logMessage:function()
                {
                    if(this.movesMade==0)
                    {return '';}
                    else{
                    for(var x=0;x<this.squares.length;x++)
                    {
                        if(this.squares[x].value!=null && x!=t1 && x!=t2 && x!=t3 && x!=t4 && x!=t5 && x!=t6 && x!=t7 && x!=t8)
                        {
                            GLog=GLog+this.squares[x].value+(x+1)+'->';
                            if(this.movesMade==1){t1=x}
                            else if(this.movesMade==2){t2=x}
                            else if(this.movesMade==3){t3=x}
                            else if(this.movesMade==4){t4=x}
                            else if(this.movesMade==5){t5=x}
                            else if(this.movesMade==6){t6=x}
                            else if(this.movesMade==7){t7=x}
                            else if(this.movesMade==8){t8=x}
                            return GLog;
                            
                        }
                    }
                }
                }
                
            }
        }); 
        </script>

    </body>
</html>