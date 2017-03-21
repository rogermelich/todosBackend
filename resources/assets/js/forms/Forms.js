export class From {
    /**
     *  Constructor
     */
    constructor(originalFields) {
        this.fields = originalFields;

        for (let field in originalFields) {
            this[field] = originalFields[field]
        }

        this.errors = new Errors()
    }

    /**
     * Reset
     */
    reset() {
        this.fields = {}

        for (let field in originalFields) {
            this.field = ''
        }

        this.errors.clear()
    }

    /**
     * Submit
     */
    submit(requiestType, url) {
        return new Promise( (resolve,reject) => {
            axios.post(url.this.fields)
                .then(response => {
                    console.log(responsive)
                })
                .catch(error => {
                    reject(error.response.data)
                })
        })
    }

    data(){}

    onSuccess(data){
        //TODO
        this.reset()
    }

    onFail(data){
        //TODO
        this.errors.record(errors.response.data)
    }

}