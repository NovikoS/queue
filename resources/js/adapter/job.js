export class Job {
    constructor(data) {
        this.id = Number(data.id);
        this.status = String(data.status);
        this.data =JSON.parse(data.mock_data);
    }
}