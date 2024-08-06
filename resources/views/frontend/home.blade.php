<x-guest-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Meeting Room Calendar</h3>
                    </div>
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Meeting Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Meeting Title:</strong> <span id="modalTitle"></span></p>
                    <p><strong>Time:</strong> <span id="modalTime"></span></p>
                    <p><strong>Organizer:</strong> <span id="modalDescription"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    editable: true,
                    selectable: true,
                    events: {!! $meetingsJson !!},
                    eventClick: function(info) {
                        function formatDate(date) {
                            var options = {
                                day: '2-digit',
                                month: '2-digit',
                                year: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit',
                                second: '2-digit',
                                hour12: true
                            };
                            var formattedDate = new Date(date).toLocaleDateString('en-GB', options);
                            var [datePart, timePart] = formattedDate.split(', ');
                            var [day, month, year] = datePart.split('/');
                            var [time, ampm] = timePart.split(' ');

                            return `${day} ${month} ${year} (${time} ${ampm})`;
                        }

                        document.getElementById('modalTitle').textContent = info.event.title;
                        document.getElementById('modalTime').textContent = formatDate(info.event.startStr);
                        document.getElementById('modalDescription').textContent = info.event.extendedProps
                            .description;

                        var modal = new bootstrap.Modal(document.getElementById('eventModal'));
                        modal.show();
                    }
                });

                calendar.render();
            });
        </script>
    @endpush
</x-guest-layout>
