// function to toggle the mobile drawer
function toggleDrawer() {
  const drawer = document.getElementById('drawer');
  drawer.classList.toggle('show');
}

function showProjects(tab) {
    const ongoingProjects = document.querySelector('.ongoing');
    const completedProjects = document.querySelector('.completed');
    const tabButtons = document.querySelectorAll('.tab-button');
    
    if (tab === 'ongoing') {
        ongoingProjects.style.display = 'grid';
        completedProjects.style.display = 'none';
    } else {
        ongoingProjects.style.display = 'none';
        completedProjects.style.display = 'grid';
    }

    tabButtons.forEach(button => button.classList.remove('active'));
    document.querySelector(`.tab-button.${tab}`).classList.add('active');
}
