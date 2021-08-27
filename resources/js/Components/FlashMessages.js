import React, { useEffect } from "react";
import { usePage } from "@inertiajs/inertia-react";
import toast, { Toaster } from "react-hot-toast";

export default () => {
    const { flash, errors } = usePage().props;
    const numOfErrors = Object.keys(errors).length;

    useEffect(() => {
        if (flash.success) toast.success(flash.success);

        if (flash.errors) toast.error(flash.errors);
        if (numOfErrors === 1)
            toast.error("Há um erro no preenchimento do formulário.");
        if (numOfErrors > 1)
            toast.error(
                `Há ${numOfErrors} erros no preenchimento do formulário.`
            );
    }, [flash, errors]);

    return <Toaster position="top-center" reverse={false} />;
};
