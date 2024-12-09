const dDayDate = new Date("2024-12-07");
const currentDate = new Date();
const nextDayAfterDday = new Date(dDayDate);
nextDayAfterDday.setDate(dDayDate.getDate() + 1);

const messageElement = document.querySelector(".congrats-message");

if (currentDate >= nextDayAfterDday) {
  messageElement.innerText = "Selamat Menempuh Hidup Baru";
  document.querySelector(".simply-countdown").style.display = "none";
} else {
  simplyCountdown(".simply-countdown", {
    year: dDayDate.getFullYear(), // required
    month: dDayDate.getMonth() + 1, // required
    day: dDayDate.getDate(), // required
    hours: 7, // Default is 0 [0-23] integer
    words: {
      //words displayed into the countdown
      days: { singular: "hari", plural: "hari" },
      hours: { singular: "jam", plural: "jam" },
      minutes: { singular: "menit", plural: "menit" },
      seconds: { singular: "detik", plural: "detik" },
    },
    onEnd: function () {
      // Change the message on D-Day
      messageElement.innerText = "Wedding Day";
      // Optionally hide the countdown
      document.querySelector(".simply-countdown").style.display = "none";
    },
  });

  // Set the initial message
  messageElement.innerText = "";
}
