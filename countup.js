const myTargetElement = document.getElementById("count-1")

const options = {
  separator: ".",
  decimal: ",",
  suffix: "mil",
}
let demo = new CountUp("myTargetElement", 7012, options)
if (!demo.error) {
  demo.start()
} else {
  console.error(demo.error)
}
