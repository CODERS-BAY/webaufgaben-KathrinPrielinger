export const SNAKE_SPEED = 1
//Array von x und y Positionen
    //Startposition
    const snakeBody = [{ x : 11, y : 11}]

export function update () {
    console.log("update snake")
}

export function draw (gameBoard) {
    //auf Bildschrim zeichnen
    snakeBody.forEach(segment => {
        const snakeElement = document.createElement("div")
        snakeElement.style.gridRowStart = segment.x
        snakeElement.style.gridColumnStart = segment.y
        snakeElement.classList.add("snake")
        gameBoard.appendChild(snakeElement)
        
    })
}