<template>
    <form method="post" @submit.prevent="submit" @keydown="form.errors.clear('$event.target.name')">
        <div class="form-group has-feedback has-error">
            <input type="text" class="form-control" placeholder="Your name here" name="name" v-model="form.name"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <span class="help-block" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Your email here" name="email" v-model="form.email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <span class="help-block" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password here" name="password" v-model="form.password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span class="help-block" v-if="form.errors.has('password')" v-text="form.errors.get('password')"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password confirmation here" name="password_confirmation" v-model="form.password_confirmation"/>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            <span class="help-block" v-if="form.errors.has('password_confirmation')" v-text="form.errors.get('password_confirmation')"></span>
        </div>
        <div class="row">
            <div class="col-xs-1">
                <label>
                    <div class="checkbox_register icheck">
                        <label>
                            <input type="checkbox" name="terms">
                        </label>
                    </div>
                </label>
            </div><!-- /.col -->
            <div class="col-xs-6">
                <div class="form-group">
                    <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">I agree to the terms</button>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4 col-xs-push-1">
                <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="form.errors.any()">Register</button>
            </div><!-- /.col -->
        </div>
    </form>
</template>

<script>
//import Errors from './Errors.js'

class From {
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

class Errors {
    /**
     *  Constructor
     */
    constructor() {
        this.errors = {}
    }

    /**
     * API
     */
    has(field) {
        return this.errors.hasOwnProperty(field)
    }

    any() {
        return Object.keys(this.errors).length > 0
    }

    /**
     * Retrieve the error message for a field
     *
     * @param field
     * @returns {*}
     */
    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0]
        }

    }

    /**
     *
     * @param errors
     */
    record(errors) {
        this.errors = errors
    }

    /**
     *
     * @param field
     */
    clear(field) {
        if (field) {
            delete this.errors(field)
            return
        }
        this.errors = {}
    }
}

export default {
  mounted () {
    console.log('Component Register Form mounted.')
    let form = new FormData(document.querySelector("form"))
    console.log(form)
    console.log(form.fields)
  },
  data: function () {
    return {
      form: new Form({
        name: ''
        email: ''
        password: ''
        password_confirmation: ''
        terms: true
      })
    }
  },
  methods: {
    submit () {
      axios.post('/register',this.form.fields)
      .then(response => {
        console.log(response)
      })
      .catch(error => {
        this.form.errors.record(error.response.data)
      })
    }
}
</script>
