document.addEventListener("DOMContentLoaded", () => {
    const orphanageSelect = document.getElementById("orphanage_id");
    const donationForm = document.getElementById("donation-form");

    // Fetch orphanages
    fetch("orphanages.php")
        .then(response => response.json())
        .then(data => {
            data.forEach(orphanage => {
                const option = document.createElement("option");
                option.value = orphanage.id;
                option.textContent = `${orphanage.name} (${orphanage.location})`;
                orphanageSelect.appendChild(option);
            });
        });

    // Handle form submission
    donationForm.addEventListener("submit", e => {
        e.preventDefault();

        const donorName = document.getElementById("donor_name").value;
        const orphanageId = document.getElementById("orphanage_id").value;
        const amount = document.getElementById("amount").value;

        fetch("donate.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: `donor_name=${donorName}&orphanage_id=${orphanageId}&amount=${amount}`,
        })
            .then(response => response.text())
            .then(data => alert(data))
            .catch(error => console.error("Error:", error));
    });
});
