// making additions so pong can be playing with two balls at the same time.

// Create the ball
var ballLength = 15;
var ballSpeed = 2;
var ballSpeed2 = 4; // moves twice as fast
var ball = makeRect(0, 0, ballLength, ballLength, ballSpeed, '#000000');
var ball2 = makeRect(0, 0, ballLength, ballLength, ballSpeed2, '#000000');

//randomize initial direction of second ball
if (Math.random() > 0.5) {
  ball2.sX *= -1;
}
if (Math.random() > 0.5) {
  ball2.sY *= -1;
}
// create second ball reseter
function resetBall2() {
  ball2.x = canvas.width / 2 - ball.w / 2;
  ball2.y = canvas.height / 2 - ball.w / 2;
  ball2.sX = ballSpeed;
  ball2.sY = ballSpeed / 2;
}

//bounce ball #2

function bounceBall() {
    // Increase and reverse the X speed
    if (ball.sX > 0) {
      ball2.sX += 1;
    // Add some "spin"
    if (keys.UP) {
      ball2.sY -= 1;
    } else if (keys.DOWN) {
      ball2.sY += 1;
    }
  } else {
      ball2.sX -= 1;
    // Add some "spin"
    if (keys.W) {
      ball2.sY -= 1;
    } else if (keys.S) {
      ball2.sY += 1
    }
  }
  ball2.sX *= -1;
}


