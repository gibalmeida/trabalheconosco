import React from "react";
import { InertiaLink } from "@inertiajs/inertia-react";

export default function Welcome(props) {
    return (
        <div className="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div className="fixed top-0 right-0 px-6 py-4 sm:block">
                {props.auth.user ? (
                    <InertiaLink
                        href="/dashboard"
                        className="text-sm text-gray-700 underline"
                    >
                        Dashboard
                    </InertiaLink>
                ) : (
                    <>
                        <InertiaLink
                            href={route("login")}
                            className="text-sm text-gray-700 underline"
                        >
                            Entrar
                        </InertiaLink>

                        <InertiaLink
                            href={route("register")}
                            className="ml-4 text-sm text-gray-700 underline"
                        >
                            Cadastre-se
                        </InertiaLink>
                    </>
                )}
            </div>

            <div className="max-w-6xl mx-auto mb-8">
                <h1 className="mx-auto sm:text-6xl text-4xl text-center text-gray-600 font-semibold">
                    Bem vindo ao nosso portal de talentos
                </h1>
            </div>
            <div className="w-full mx-auto sm:px-6 lg:px-8">
                <div className="flex justify-center px-6 sm:pt-0">
                    <img
                        src="img/companylogo.svg"
                        className="h-20 md:h-40 w-auto text-gray-700"
                    />
                </div>
            </div>
        </div>
    );
}
