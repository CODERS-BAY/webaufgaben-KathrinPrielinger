import { update as updateSnake, draw as drawSnake, SNAKE_SPEED } from "snake.js"

let lastRenderTime = 0
const gameBoard = document.getElementById("game-board")

//Endlosschleife, game loop on a set intervall
function main(currentTime) {
    window.requestAnimationFrame(main)
    const secondsSinceLastRender = (currentTime - lastRenderTime) / 1000
    if (secondsSinceLastRender < 1 / SNAKE_SPEED) return


    
    lastRenderTime = currentTime

    //Logik des Spiels
        //move snake to the correct position
        update()
        //draw everything on the screen based on the update-loop
        draw()
}

window.requestAnimationFrame(main)

function update () {
    updateSnake()
}

function draw () {
    drawSnake
}
