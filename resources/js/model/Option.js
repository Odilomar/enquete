export default class Option {
    constructor(option_description = '', poll_id = '', amount = 0) {
        this.option_description = option_description
        this.poll_id = poll_id
        this.amount = amount
    }
}
